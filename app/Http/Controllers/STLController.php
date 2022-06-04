<?php

namespace App\Http\Controllers;

use App\Models\STL;
use App\Http\Requests\StoreSTLRequest;
use App\Http\Requests\UpdateSTLRequest;
use Illuminate\Http\Request;

class STLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $modelo = $request->modelo;
        return view('stls.create', compact('modelo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSTLRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSTLRequest $request)
    {
        STL::create($request->all());
        return redirect()->route('modelos.edit', $request->ID_MODELO)->with('success', 'STL creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\STL  $sTL
     * @return \Illuminate\Http\Response
     */
    public function show(STL $sTL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\STL  $sTL
     * @return \Illuminate\Http\Response
     */
    public function edit(STL $stl)
    {
        return view('stls.edit', compact('stl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSTLRequest  $request
     * @param  \App\Models\STL  $sTL
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSTLRequest $request, STL $stl)
    {
        $stl->update($request->all());
        return redirect()->route('modelos.edit', $request->ID_MODELO)->with('success', 'STL Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\STL  $sTL
     * @return \Illuminate\Http\Response
     */
    public function destroy(STL $stl)
    {
        $stl->delete();
        return redirect()->route('modelos.edit', $stl->ID_MODELO)
            ->with('success','El STL con id ' . $stl->id . ' ha sido eliminado');
    }
}
