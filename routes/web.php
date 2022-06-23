<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\FormularioController;

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

Route::match(['get','post'],'/', [ChamadoController::class,'index'])->name('home');

Route::get('/chamado', function () { return view('formularioChamado');})->name('formulario');

Route::post('/enviarChamado',[FormularioController::class,'store']);










