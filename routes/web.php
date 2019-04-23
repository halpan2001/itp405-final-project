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

Route::get('/', 'ComissionController@home');
Route::get('/comission/create', 'ComissionController@create');
Route::get('/comission/{id}', 'ComissionController@index');
Route::get('/comission/{id}/edit', 'ComissionController@edit');
Route::get('/profile', 'ComissionController@profile');

Route::get('/login', 'LoginController@index');
Route::get('/signup', 'SignUpController@index');

Route::get('/about', function () {
    return view('about');
});
