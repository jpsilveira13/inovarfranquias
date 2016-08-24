<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    $estados = \App\Cidade::select('uf')->distinct()->orderBy('uf','asc')->get();

    return view('site.pages.home',compact('estados'));
});

Route::get('pega-cidade/{ufNome}','SiteController@pegaCidade');
Route::post('form-franquia', 'SiteController@formFranquia');
Route::get('testando','SiteController@testando');

Route::get('mostra-mensagem','SiteController@mostrarMensagem');
Route::get('/email',[
    'uses' => 'SiteController@sendEmailTest'

]);

Route::get('/ficha-selecao','SiteController@fichaSelecao');
Route::get('/consultar_cep','SiteController@searchCep');

//$app->get('pega-cidade/{ufNome}','SiteController@pegaCidade');
