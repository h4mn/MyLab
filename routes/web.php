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

Route::get('tarefa', 'TarefaController@index');
Route::get('tarefa/teste', 'TarefaController@teste');
Route::get('tarefa/showtags', 'TarefaController@getTagFromHabitica');
Route::get('produto', 'ProdutoController@index');
Route::get('produto/apresentacao/{id?}', 'ProdutoController@presentation');

Route::get('readme', 'ReadmeController@index');

Route::get('devlog','DevlogController@index');