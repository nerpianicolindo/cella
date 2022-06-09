<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use App\Http\Requests\StoreCasoRequest;
use App\Http\Requests\UpdateCasoRequest;
use Illuminate\Http\Request;

class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casos = Caso::all();
        return view('inicio', compact('casos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCasoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCasoRequest $request)
    {
        Caso::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Caso creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function show(Caso $caso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function edit(Caso $caso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCasoRequest  $request
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCasoRequest $request, Caso $caso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caso  $caso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caso $caso)
    {
        $modelos = $caso->modelos;
        foreach($modelos as $modelo){
            $stls = $modelo->stls;
            foreach($stls as $stl) {
                $stl->delete();
            }
            $modelo->delete();
        }
        $caso->delete();
        return redirect()->route('dashboard')
            ->with('success','El caso con id ' . $caso->id . ' ha sido eliminado');
    }

    public function idsDisponibles()
    {
        $ids = Caso::select('id')->get();
        return response()->json($ids);
    }

    public function withModels(Request $request)
    {
        $caso = Caso::where('id', '=', $request->id)
        ->with('modelos')->first();
        return response()->json(array('modelos' => $caso->modelos));
    }
}
