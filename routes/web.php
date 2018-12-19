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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('home','EventController');
Route::get('/showpanel/{userid}','EventController@display');
Route::get('/rooms','EventController@displayRooms');
//rooms
Route::get('/rooms/tatooine','EventController@displayTatooine');
Route::get('/rooms/goldenrod','EventController@displayGoldenrod');
Route::get('/rooms/gotham','EventController@displayGotham');
Route::get('/rooms/duckburg','EventController@displayDuckburg');