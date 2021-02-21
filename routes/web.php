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
Route::get('/home', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/info', 'InfoController@index');
Route::get('/schedule', 'ScheduleController@index');
Route::get('/first_time', 'First_timeController@index');
Route::get('/question', 'QuestionController@index');