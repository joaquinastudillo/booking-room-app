<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Create new event
Route::get('events', 'EventControllerApi@index');
Route::post('events', 'EventControllerApi@store');
Route::put('events', 'EventControllerApi@store');
Route::delete('events/{id}', 'EventControllerApi@destroy');
