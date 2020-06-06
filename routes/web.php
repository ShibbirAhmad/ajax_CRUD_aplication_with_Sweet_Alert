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

Route::get('/','ClientController@home');

Route::get('client','ClientController@index')->name('ajax_home');

Route::get('client/data', 'ClientController@getClient');
Route::post('client/add','ClientController@addClient');
Route::post('client/update', 'ClientController@updateClient');

Route::delete('client/deleted','ClientController@deleteClient')->name('client.delete');




?>