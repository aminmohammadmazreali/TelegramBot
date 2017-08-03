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

Route::get('me', 'ApiController@me');

Route::get('updates', 'ApiController@updates');
Route::get('respond', 'ApiController@respond');

Route::get('setWebHook', 'ApiController@setWebHook');

Route::post('my-bot-token/webhook', 'ApiController@setWebHook');







