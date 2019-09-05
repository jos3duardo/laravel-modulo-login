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

Route::get('/home', 'ClientsController@index')->name('home');
Route::get('/', 'ClientsController@index')->name('index');

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientsController@index')->name('clients');
    Route::get('/create', 'ClientsController@create')->name('client-add');
    Route::post('/', 'ClientsController@store')->name('client');
    Route::get('/edit/{id}', 'ClientsController@edit')->name('client-edit');
    Route::post('/update/{id}', 'ClientsController@update')->name('client-up');
    Route::get('/delete/{id}', 'ClientsController@destroy')->name('client-destroy');
    Route::get('/email/{id}', 'ClientsController@email')->name('client-email');
});
