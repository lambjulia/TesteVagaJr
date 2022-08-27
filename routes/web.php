<?php

use Illuminate\Support\Facades\Route;

Route::get('/date', 'App\Http\Controllers\DateController@date');

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/formulario', 'App\Http\Controllers\UsuarioController@preencherDados')->name('formulario');

Route::post('/cadastrar', 'App\Http\Controllers\UsuarioController@cadastrar')->name('cadastrar');

Route::get('/tabelausuarios', 'App\Http\Controllers\UsuarioController@tabela')->name('tabelausuarios');

Route::get('/editar/{id}', 'App\Http\Controllers\UsuarioController@editar')->name('editar');

Route::post('/update/{id}', 'App\Http\Controllers\UsuarioController@update')->name('update');

Route::get('/destroy/{id}', 'App\Http\Controllers\UsuarioController@destroy')->name('destroy');






