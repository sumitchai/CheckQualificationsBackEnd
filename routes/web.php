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
    return view('index');
});


Route::get('/tablefrom', function () {
    return view('Tablefrom');
});


// Route::get('/Checkindividual', function () {
//     return view('Checkindividual');
// });

// Route::get('/SelectThailist', function () {
//     return view('SelectThailist');
// });

Route::get('/SelectENlist', function () {
    return view('SelectENlist');
});

Route::get ('/Check_course','grauateController@seclectgrauate');

Route::get ('/SelectThailist','grauateController@seclectcourse');
Route::get ('/SelectEN','grauateController@seclectgrauate01');
Route::resource ('Checkindividual', 'insertController');

//เปลี่ยนภาษา
Route::get('lang/{locale}', function ($locale) {
    //App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
    });