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
Route::get('/', 'TestController@test');

Route::get('/meat', 'MeatController@index');
Route::get('/meat/edit/{id}', 'MeatController@edit');
Route::post('/meat/update', 'MeatController@update');
Route::get('/meat/delete/{id}', 'MeatController@remove');


Route::get('/order/index', 'OrderController@index');
Route::get('/test', 'TestController@test');


