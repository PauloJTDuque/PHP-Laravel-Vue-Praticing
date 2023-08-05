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

Route::get('/', 'PrincipalController@principal');

/*Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});*/

Route::get('/sobre-nos', 'SobreNosController@sobreNos'); 

Route::get('/contato', 'ContatoController@contato'); 

/* Verbos HTTP
get
post
put
patch
delete
*/