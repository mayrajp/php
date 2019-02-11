<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', ['uses' => 'MenuController@carregaPeronagens']);

Route::post('/menu/armas', ['uses' => 'MenuController@associarArma']);

Route::post('/menu/inimigos', ['uses' => 'MenuController@gerarInimigos']);

Route::post('/menu/batalha', ['uses' => 'MenuController@gerarResultadoBatalha']);
