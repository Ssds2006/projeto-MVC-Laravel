<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\DividasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// --- FORMA ANTIGA DE ROTAS --- //
//Route::get('/clientes',[\App\Http\Controllers\ClientesController::class,'index']);
//Route::get('/clientes/criar',[\App\Http\Controllers\ClientesController::class,'create']);
//Route::post('/clientes/salvar',[\App\Http\Controllers\ClientesController::class,'store']);
// --- FORMA ANTIGA DE ROTAS --- //
//Route::controller(\App\Http\Controllers\ClientesController::class)->group(function (){
//    Route::get('/clientes','index')->name('clientes.index');
//    Route::get('/clientes/create','create')->name('clientes.create');
//    Route::post('/clientes/salvar','store')->name('clientes.store');
//});

//ROTAS SITE
//NOMES DADOS PARA AS ROTAS
Route::get('/principal',[PrincipalController::class,'principal'])->name('site.index');
Route::get('/contato',[ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato',[ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/sobre-nos',[SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/login',[LoginController::class, 'login'])->name('site.login');
Route::post('/login',[LoginController::class, 'autenticar'])->name('site.login');
Route::get('/cadastro', [CadastroController::class, 'exibirFormulario'])->name('site.cadastro.formulario');

Route::post('/cadastro', [CadastroController::class, 'cadastrar'])->name('site.cadastro.salvar');
Route::get('/cadastro/sucesso', [CadastroController::class, 'cadastroSucesso'])->name('site.cadastro.sucesso');





//GRUPO DE ROTAS
//NOMES DADOS PARA AS ROTAS
Route::prefix('/app')->group(function (){
    Route::resource('/clientes', ClientesController::class)
        ->except(['show']);
    Route::get('/fornecedores',[FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/dividas',function (){return 'dividas';})->name('app.dividas');
});

////envio de rota com parametro obrigatório
//Route::get('contato/{nome}/{categoria}/{assunto}/{mensagem}', function (string $nome, string $categoria, string $assunto, string $mensagem)
//{
//    echo "estamos aqui: $nome - $categoria - $assunto - $mensagem";
//});
//-------------------------------------------------------------------------------------------------------------------------------------------
////envio de rota com parametro opcional colocar o ponto de '?' na frente do nome do parametro dentro das {} e acrescentar uma frase opcional
////passado da direita para esquerda
//Route::get('contato/{nome}/{categoria}/{assunto}/{mensagem?}',
//    function (string $nome,
//              string $categoria,
//              string $assunto,
//              string $mensagem = 'Mensagem não informada')
//    {
//        echo "estamos aqui: $nome - $categoria - $assunto - $mensagem";
//    });
//
//Route::get('contato/{nome}/{categoria_id}',
//    function (string $nome,
//              string $categoria_id
//    ) {
//    echo "estamos aqui: $nome - $categoria_id";
//});
//Route::delete('/clientes/destroy/{cliente}',[\App\Http\Controllers\ClientesController::class,'destroy'])-> name('clientes.destroy');
//Route::get('/clientes/{cliente}/dividas',[DividasController::class,'index'])->name('dividas.index');

Route::get('/dividas/{cliente}', [DividasController::class, 'index'])->name('dividas.index');

//REDIRECIONAMENTO DE ROTA
//Route::get('/rota1',function (){
//    echo 'Rota 1';
//})->name('site.rota1');
////-------
////Route::get('/rota2',function (){
////    echo 'Rota 2';
////})->name('site.rota2');
////-------
////Route::redirect('/rota2','/rota1');
////----
//Route::get('/rota2',function (){
//    return redirect()->route('site.rota1');
//})->name('site.rota2');

//ROTA DE FALLBACK
Route::fallback(function (){
   echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para voltar a página principal';
});
