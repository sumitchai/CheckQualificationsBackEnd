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


Route::get('/tablefrom', function () {
    return view('Tablefrom');
});

Route::get ('/db','grauateController@seclectgrauate');
Route::get ('/db1','grauateController@seclectgrauate01');
Route::get ('/db2','grauateController@seclectgrauate02');
