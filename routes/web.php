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
Route::get('/test', 'TestController@test');


// Meats controller routes
Route::get('/meat', 'MeatController@index');
Route::get('/meat/edit/{id}', 'MeatController@edit');
Route::post('/meat/update/{id}', 'MeatController@update');
Route::get('/meat/add', 'MeatController@add');
Route::post('/meat/create', 'MeatController@create');
Route::get('/meat/delete/{id}', 'MeatController@delete');

// Vegetables controller routes
Route::get('/vegetable', 'VegetableController@index');
Route::get('/vegetable/edit/{id}', 'VegetableController@edit');
Route::post('/vegetable/update/{id}', 'VegetableController@update');
Route::get('/vegetable/add', 'VegetableController@add');
Route::post('/vegetable/create', 'VegetableController@create');
Route::get('/vegetable/delete/{id}', 'VegetableController@delete');


// Cheeses controller routes
Route::get('/cheese', 'CheeseController@index');
Route::get('/cheese/edit/{id}', 'CheeseController@edit');
Route::post('/cheese/update/{id}', 'CheeseController@update');
Route::get('/cheese/add', 'CheeseController@add');
Route::post('/cheese/create', 'CheeseController@create');
Route::get('/cheese/delete/{id}', 'CheeseController@delete');

// Sauces controller routes
Route::get('/sauce', 'SauceController@index');
Route::get('/sauce/edit/{id}', 'SauceController@edit');
Route::post('/sauce/update/{id}', 'SauceController@update');
Route::get('/sauce/add', 'SauceController@add');
Route::post('/sauce/create', 'SauceController@create');
Route::get('/sauce/delete/{id}', 'SauceController@delete');

// Pizzas controller routes
Route::get('/pizza', 'PizzaController@index');
Route::get('/pizza/edit/{id}', 'PizzaController@edit');
Route::post('/pizza/update/{id}', 'PizzaController@update');
Route::get('/pizza/add', 'PizzaController@add');
Route::post('/pizza/create', 'PizzaController@create');
Route::get('/pizza/delete/{id}', 'PizzaController@delete');





