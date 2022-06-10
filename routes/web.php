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
     //return view('index');
    // return view('admLogado');
    // return view('chamadoExpandido');
     return view('formularioChamado');
    // return view('usuarioLogado');
    Route::post('/contato/inserir','ContatoController@store');
});
//Método do Controller
public function store(Request $request)



{
    $contato = new ContatoModel();

    $contato->nome = $request->txNome;
    $contato->email = $request->txEmail;
    $contato->fone = $request->txFone;
    $contato->assunto = $request->txAssunto;
    $contato->mensagem = $request->txMensagem;

    $contato->save();

}

//Model

 public $table = "tbContato"; //nome da tabela a var deve ter o nome $table

 public $timestamps=false;

 protected $fillable = ['nome','email','fone','assunto','mensagem'];





// https://acervolima.com/laravel-protecao-csrf/#:~:text=Cross%2DSite%20Request%20Forgery%20(CSRF,CSRF%20%2C%20gerando%20um%20token%20CSRF%20.
