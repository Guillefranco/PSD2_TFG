<?php

Route::get('/', 'TestController@welcome');

//Funcion que se ejecuta cuando llama a la URL raiz "/"


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
