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

Route::get('/', function () {return view('Auth/login');});

Route::get('login', function (){return view('Auth/login');});

Auth::routes();

Route::get('location/{id}', 'HomeController@open')->name('location');
Route::get('location', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index')->name('home2');
