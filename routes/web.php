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
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/infokes', 'HomeController@infokes')->name('home.infokes');


Route::resource('/antrian','AntrianController')->only('index','store', 'show');

Route::get('/daftar/{idLayanan}', 'DaftarController@index')->name('daftar.index');
Route::post('/daftar', 'DaftarController@store')->name('daftar.store');
Route::post('/ambilAntrian', 'DaftarController@ambilAntrian')->name('daftar.ambilAntrian');

Route::get('/login', 'AuthController@index')->name('auth.index');
Route::post('/login', 'AuthController@login')->name('auth.login');

Route::get('/admin', 'Admin\HomeController@index')->name('admin.index');


