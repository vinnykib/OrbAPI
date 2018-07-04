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

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

//Appreciations routes
Route::get('appreciations','AppreciationController@index');
Route::get('appreciations/{id}','AppreciationController@show');
Route::post('appreciations','AppreciationController@store');
Route::put('appreciations','AppreciationController@store');
Route::delete('appreciations/{id}','AppreciationController@destroy');

//Orbituary routes
Route::get('orbituaries','OrbituaryController@index');
Route::get('orbituaries/{id}','OrbituaryController@show');
Route::post('orbituaries','OrbituaryController@store');
Route::put('orbituaries','AppreciationController@store');
Route::delete('orbituaries/{id}','OrbituaryController@destroy');

//Memorial routes
Route::get('memorials','MemorialController@index');
Route::get('memorials/{id}','MemorialController@show');
Route::post('memorials','MemorialController@store');
Route::put('appreciations','MemorialController@store');
Route::delete('memorials/{id}','MemorialController@destroy');



