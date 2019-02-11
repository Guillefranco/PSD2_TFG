<?php

Route::get('/', 'TestController@welcome');

//Funcion que se ejecuta cuando llama a la URL raiz "/"


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');

//Rutas para el admin creación de productos, eliminar etc
//crear un route group con todas las rutas
Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
//Route::get('/admin','ProductController@index');
Route::get('/products','ProductController@index');
Route::get('/products/create','ProductController@create'); //get form
Route::post('/products','ProductController@store'); //post form
Route::get('/products/{id}/edit','ProductController@edit'); //edit form
Route::post('/products/{id}/edit','ProductController@update'); //update form
Route::delete('/products/{id}', 'ProductController@destroy');
});