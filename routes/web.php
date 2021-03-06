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

Auth::routes();
Route::get('/home', 'App\Http\Controllers\PlayerController@index')->middleware('auth');
Route::get('/home/form', 'App\Http\Controllers\PlayerController@form')->middleware('auth');
Route::post('/home/add', 'App\Http\Controllers\PlayerController@add')->middleware('auth');
Route::get('/home/{id}/edit', 'App\Http\Controllers\PlayerController@edit')->middleware('auth');
Route::post('/home/update/{id}', 'App\Http\Controllers\PlayerController@update')->middleware('auth');
Route::delete('/home/delete/{id}', 'App\Http\Controllers\PlayerController@delete')->middleware('auth');