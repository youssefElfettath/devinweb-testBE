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

Route::get('/api/city', 'HomeController@addCity');
Route::get('/api/delivery-times', 'HomeController@addDelivery');
Route::get('/api/city/{city_id}/delivery-times', 'HomeController@addDelivery');


