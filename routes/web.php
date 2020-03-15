<?php

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
    return view('welcome');
});

Route::get('todos', 'TodosController@index'); // display all data page todos
Route::get('todos/{todo}', 'TodosController@show'); // display single page todos
Route::get('new-todos', 'TodosController@create');  // display todos form
Route::post('store-todos', 'TodosController@store');  // save todos data in database

Route::get('todos/{todo}/edit', 'TodosController@edit');  // save todos data in database
Route::post('todos/{todo}/update-todos', 'TodosController@update');  // save todos data in database
Route::get('todos/{todo}/delete', 'TodosController@destroy');  // save todos data in database
