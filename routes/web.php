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

Route::get('/', 'PostsController@index');
Route::post('/delete/{id}', 'PostsController@destroy');
Route::get('/edit/{id}', 'PostsController@edit');
Route::post('/update/{id}', 'PostsController@update');
Route::get('/create', 'PostsController@create');


