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

Route::get('/', 'CommissionController@home');
Route::get('/commission/create', 'CommissionController@create');
Route::get('/commission/{id}', 'CommissionController@index');
Route::get('/commission/{id}/edit', 'CommissionController@edit');
Route::get('/profile/{id}', 'ProfileController@index');
Route::get('/profile/{id}/edit', 'ProfileController@edit');

Route::get('/login', 'LoginController@index');
Route::get('/signup', 'SignUpController@index');
Route::post('/signup', 'SignUpController@signup');

Route::get('/about', function () {
    return view('about');
});
