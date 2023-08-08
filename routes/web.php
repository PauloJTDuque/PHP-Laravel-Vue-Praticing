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

/* Método GET passando como primeiro parâmetro uma URI 
e em segundo uma função de $callback uma ação que deve ser tomada */
/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao Cruso de Laravel';
});
*/

/*Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');
// nome, categoria, assunto, mensagem


Route::get(
    '/contato/{nome}/{categoria_id}',
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - 'Informação'
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

/* Verbos HTTP
get
post
put
patch
delete
*/