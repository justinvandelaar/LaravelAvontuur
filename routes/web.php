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
Route::any('patchnotes', 'HomeController@patchnotes')->name('patchnotes');

Auth::routes();
Route::get('error', function() { return view('locationError'); } );
Route::get('location/{id}', 'HomeController@open')->name('location');
Route::any('checkQuest', 'HomeController@checkQuest')->name('checkQuest');
Route::post('checkAttack', 'HomeController@checkAttack');
Route::post('checkBuy', 'HomeController@checkBuy');
Route::post('weaponBuy', 'HomeController@weaponBuy');
Route::post('checkUse', 'HomeController@checkUse');
Route::get('location/15/{area_id}', 'HomeController@monstertime')->name('monstertime');
Route::get('location/21/{id}', 'Homecontroller@npc')->name('npc');
Route::get('location/22/{id}', 'Homecontroller@items')->name('item');
Route::get('location/27/{id}', 'Homecontroller@shops')->name('shops');
Route::get('location/46/{id}', 'Homecontroller@warehouses')->name('warehouses');
Route::get('location', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index')->name('home2');
Route::post('updateStats', 'HomeController@upgradeStat')->name('upgradeStat');
