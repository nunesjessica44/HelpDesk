<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;

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

    //Route::get('/chamadoExpandido', function () {
    //return view('index');
    // return view('admLogado');
    // return view('chamadoExpandido');
    //return view('/chamadoExpandido','ChamadoController@index');
    //Route::controller('users', 'UserController');
    // return view('formularioChamado');
    // return view('usuarioLogado');
    //});

Route::match(['get','post'],'/', [ChamadoController::class,'index'])->name('home');
