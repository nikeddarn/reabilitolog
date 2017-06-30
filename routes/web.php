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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/main/main');
});

// Change language
Route::get('language/{language}', 'Localization\LanguageController@changeLanguage');


// Page's routes
Route::get('/about', function () {
    return view('pages/about/about');
});
Route::get('/contact', function () {
    return view('pages/contact/contact');
});
Route::get('/rehabilitation', function () {
    return view('pages/rehabilitation/rehabilitation');
});
Route::get('/massage/common', function () {
    return view('pages/common/common');
});
Route::get('/massage/back', function () {
    return view('pages/back/back');
});
Route::get('/massage/insult', function () {
    return view('pages/insult/insult');
});
Route::get('/price', function () {
    return view('pages/price/price');
});
Route::get('/articles', function () {
    return view('pages/articles/articles');
});
Route::get('articles/resources', function () {
    return view('articles/pages/resources');
});
Route::get('articles/rest', function () {
    return view('articles/pages/rest');
});
Route::get('articles/auto_massage', function () {
    return view('articles/pages/auto_massage');
});
Route::get('/books', function () {
    return view('media/books');
});
Route::get('/music', function () {
    return view('media/music');
});

// Order routes
Route::get('/order', 'Order\OrderFormController@showForm');
Route::get('/success', function () {
    return view('order/success');
});
Route::post('/order', 'Order\OrderController@order');
