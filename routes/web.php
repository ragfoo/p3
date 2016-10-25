<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return "Developers Best Friend";
});

Route::resource('ipsum', 'IpsumController');

Route::post('/ipsum', 'IpsumController@index')->name('ipsum.index');
