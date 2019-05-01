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
Route::post('/commission/create', 'CommissionController@post');
Route::get('/commission/{id}', 'CommissionController@index');
Route::get('/commission/{id}/edit', 'CommissionController@edit');
Route::patch('/commission/{id}/edit', 'CommissionController@update');
Route::delete('/commission/{id}/delete', 'CommissionController@delete');

Route::get('/purchase/{id}', 'PurchaseController@index');
Route::get('/purchase/{id}/new', 'PurchaseController@new');
Route::post('/purchase/{id}/new', 'PurchaseController@create');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@edit');
Route::patch('/profile/edit', 'ProfileController@update');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/signup', 'SignUpController@index');
Route::post('/signup', 'SignUpController@signup');

Route::get('/about', function () {
    return view('about');
});
