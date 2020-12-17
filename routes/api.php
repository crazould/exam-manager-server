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


Route::get('schedule-header', 'ScheduleHeaderController@index');
Route::post('schedule-header', 'ScheduleHeaderController@store');
Route::put('schedule-header/{id}', 'ScheduleHeaderController@update');
Route::delete('schedule-header/{id}', 'ScheduleHeaderController@destroy');

Route::get('schedule-detail', 'ScheduleDetailController@index');
Route::post('schedule-detail', 'ScheduleDetailController@store');
Route::put('schedule-detail/{id}', 'ScheduleDetailController@update');
Route::delete('schedule-detail/{id}', 'ScheduleHeaderController@destroy');

Route::get('question', 'QuestionController@index');
Route::post('question', 'QuestionController@store');
Route::put('question/{id}', 'QuestionController@update');
Route::delete('question/{id}', 'QuestionController@destroy');

// Development

Route::get('user-answer', 'UserAnswerController@index');
Route::post('user-answer', 'UserAnswerController@store');
Route::put('user-answer/{id}', 'UserAnswerController@update');
Route::delete('user-answer/{id}', 'UserAnswerController@destroy');

Route::get('question-option', 'QuestionOptionController@index');
Route::post('question-option', 'QuestionOptionController@store');
Route::delete('question-option/{id}', 'QuestionOptionController@destroy');

// Unused
Route::get('schedule', 'ScheduleController@index');
Route::post('schedule', 'ScheduleController@store');
Route::delete('schedule/{id}', 'ScheduleController@destroy');





