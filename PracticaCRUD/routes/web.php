<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/clientes', 'customers@index');

Route::get('/crear', 'customers@create');

Route::post('/alta','customers@save');

Route::get('/show/{id}','customers@show');

Route::post('/actualizar','customers@update');

Route::get('/borrar/{id}','customers@destroy');