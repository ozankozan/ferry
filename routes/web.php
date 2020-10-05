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


Route::get('/', 'VapurController@index');
Route::post('/saatler', 'VapurController@result');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin', 'VapurController@admin');

Route::get('/{slug}', 'VapurController@getPost');
