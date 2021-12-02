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
Route::get('/', 'App\Http\Controllers\CuidadorController@index') -> name('cuidador.index');
Route::get('/cuidador/create', 'App\Http\Controllers\CuidadorController@create') -> name('cuidador.create');
Route::post('/cuidador/', 'App\Http\Controllers\CuidadorController@store') -> name('cuidador.store');
