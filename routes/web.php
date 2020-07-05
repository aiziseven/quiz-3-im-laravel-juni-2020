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

Route::get('/', function () {
    return view('home');
})->name("erd");

Route::get('/artikel', 'ArtikelController@index')->name("artikel");
Route::get('/artikel/create', 'ArtikelController@create')->name("artikelcreate");
Route::post('/artikel', 'ArtikelController@insert');
Route::get('/artikel/{id}', 'ArtikelController@detail');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
Route::put('/artikel/{id}', 'ArtikelController@update');
Route::get('/artikel/{id}/delete', 'ArtikelController@deleteconfirm');
Route::delete('/artikel/{id}', 'ArtikelController@delete');
