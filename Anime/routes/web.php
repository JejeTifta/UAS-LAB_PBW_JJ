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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/tampildata', 'AnimeController@readdata');
Route::get('/tambahdata','AnimeController@input');
Route::post('/anime/store', 'AnimeController@store');

Route::get('/anime/edit/{genre}', 'AnimeController@edit');
Route::post('/anime/update', 'AnimeController@update');
Route::get('/anime/hapus/{genre}', 'AnimeController@hapus');
