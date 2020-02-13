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

// Route::get('/dataindividual', function () {
//     return view('dataindividual');
// });

//Route::get ('/Check_course','grauateController@seclectgrauate');

//Route::get ('/SelectThailist','grauateController@seclectcourse');
Route::get ('/SelectEN','grauateController@seclectgrauate01');
//Route::get ('/Check_course', 'grauateController@seclectgrauate');
Route::resource ('test', 'TestController');
Route::post ('test/update/{id}', 'TestController@update');
Route::get ('test/delete/{id}', 'TestController@destroy');


Route::resource ('Check_course', 'insertController');
Route::resource ('SelectThailist', 'insertController');


Route::resource ('Check_course_EN', 'insertEnController');
Route::resource ('SelectEN', 'insertEnController');


 Route::resource ('Checkindividual', 'CheckController');
 Route::resource ('CheckindividualEN', 'CheckENController');
 Route::post ('/dataindividual','CheckController@search');
// Route::resource ('dataindividual', 'CheckController');

Route::get('/indexEN', function () {
    return view('indexEN');
});





//เปลี่ยนภาษา
Route::get('lang/{locale}', function ($locale) {
    //App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
    });
// PDF
Route::get('/PdfDemo', ['as'=>'PdfDemo','uses'=>'PdfDemoController@index']);
Route::get('/sample-pdf', ['as'=>'SamplePDF','uses'=>'PdfDemoController@samplePDF']);
Route::get('/save-pdf', ['as'=>'SavePDF','uses'=>'PdfDemoController@savePDF']);
Route::get('/download-pdf', ['as'=>'DownloadPDF','uses'=>'PdfDemoController@downloadPDF']);
Route::get('/html-to-pdf', ['as'=>'HtmlToPDF','uses'=>'PdfDemoController@htmlToPDF']);
Auth::routes();

// Admin
Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('searchform','BookController');

Route::get('/searchform', 'BookController@index');
Route::get('/searchform/action', 'BookController@action')->name('searchform.action');