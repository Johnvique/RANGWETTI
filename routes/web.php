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


Route::get('/admission-procedure', function () {
    return view('admission-procedure');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/fee-paid', function () {
    return view('fee-paid');
});

Route::get('/college-history', function () {
    return view('college-history');
});

Route::get('/letters', function () {
    return view('letters');
});

Route::get('/latest-news', function () {
    return view('latest-news');
});

Route::get('/courses-offered', function () {
    return view('courses-offered');
});

Route::get('/our-gallery', function () {
    return view('our-gallery');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
