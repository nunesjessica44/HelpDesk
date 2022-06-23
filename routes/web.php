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

Route::match(['get','post'],'/', [ChamadoController::class,'index'])->name('home');
Route::get('/', function () { return view('formularioChamado');
Route::post('/contato/inserir','ContatoController@store');
    
});


// //Método do Controller
// public function store(Request $request)



// {
//     $contato = new ContatoModel();

//     $contato->nome = $request->txNome;
//     $contato->email = $request->txEmail;
//     $contato->fone = $request->txFone;
//     $contato->assunto = $request->txAssunto;
//     $contato->mensagem = $request->txMensagem;

//     $contato->save();

// }

// //Model

//  public $table = "tbContato"; //nome da tabela a var deve ter o nome $table

//  public $timestamps=false;

//  protected $fillable = ['nome','email','fone','assunto','mensagem'];





// // https://acervolima.com/laravel-protecao-csrf/#:~:text=Cross%2DSite%20Request%20Forgery%20(CSRF,CSRF%20%2C%20gerando%20um%20token%20CSRF%20.
