<?php

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

Route::get('/', function () {
     return view('index');
    // return view('admLogado');
    // return view('chamadoExpandido');
    // return view('formularioChamado');
    // return view('usuarioLogado');
    // return view('exibir_chamado');
});
