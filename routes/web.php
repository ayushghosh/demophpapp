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


Route::get('/app/ok', 'HomeController@ok');
Route::get('/app/dev1', 'HomeController@dev1');
Route::get('/app/dev2', 'HomeController@dev2');
