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

Route::get('/', 'HomeController@index')->name('home.index');

Route::resource('/antrian','AntrianController')->only('index','store', 'show');

Route::get('/daftar/{idLayanan}', 'DaftarController@index')->name('daftar.index');
Route::post('/daftar', 'DaftarController@store')->name('daftar.store');
Route::post('/ambilAntrian', 'DaftarController@ambilAntrian')->name('daftar.ambilAntrian');

