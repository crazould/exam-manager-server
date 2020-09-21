<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('participant', 'UserController@index');
Route::post('participant', 'UserController@store');
Route::get('participant/{id}', 'UserController@show');
Route::put('participant/{id}', 'UserController@update');
Route::delete('participant/{id}', 'UserController@destroy');

Route::get('test', 'TestController@index');
Route::post('test', 'TestController@store');

Route::get('schedule', 'ScheduleController@index');
Route::post('schedule', 'ScheduleController@store');
Route::delete('schedule/{id}', 'ScheduleController@destroy');

// Development

Route::get('test-header', 'TestHeaderController@index');
Route::post('test-header', 'TestHeaderController@store');

Route::get('schedule-header', 'ScheduleHeaderController@index');
Route::post('schedule-header', 'ScheduleHeaderController@store');
Route::delete('schedule-header/{id}', 'ScheduleHeaderController@destroy');

Route::get('schedule-detail', 'ScheduleDetailController@index');
Route::post('schedule-detail', 'ScheduleDetailController@store');
Route::delete('schedule-detail/{id}', 'ScheduleHeaderController@destroy');




