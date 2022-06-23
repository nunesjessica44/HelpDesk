<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;

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

//pagina principal
Route::match(['get','post'],'/logado', [ChamadoController::class,'index'])->name('logado');

//envio do chamado
Route::get('/chamado', function () { return view('formularioChamado');})->name('formulario');
Route::post('/enviarChamado',[FormularioController::class,'store'])->name('enviarChamado');

//login do usuario
Route::get('/', [LoginController::class,'index'])->name('login');
Route::post('/logar', [LoginController::class,'store'])->name('logar');

//deletar chamado
Route::post('/deletarChamado/{id}',[FormularioController::class,'destroy']);











