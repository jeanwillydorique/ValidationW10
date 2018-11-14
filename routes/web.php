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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/orderbylocalisation', 'HomeController@orderbylocalisation')->name('home');
Route::post('/orderbystatus', 'HomeController@orderbystatus')->name('home');

Route::post('/updatearenasviews', 'Arenas@update')->name('home');
Route::post('/updatearenasaction', 'Arenas@updateOne')->name('home');
Route::post('/delete', 'Arenas@deleteOne')->name('home');
Route::get('/createarena', 'Arenas@createview')->name('home');
Route::post('/createarenaaction', 'Arenas@createOne')->name('home');
