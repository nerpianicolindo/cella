<?php

use App\Http\Controllers\CasoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\STLController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CasoController::class, 'index'])->name('dashboard');
Route::resource('casos', CasoController::class);
Route::resource('modelos', ModeloController::class);
Route::resource('stls', STLController::class);

Route::get('/modelos/create/{caso}', [ModeloController::class, 'create'])->name('modelos.create2');
Route::get('/stls/create/{modelo}', [STLController::class, 'create'])->name('stls.create2');
