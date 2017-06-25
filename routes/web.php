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
    return view('pages/main/main', ['page' => 'main']);
});

// Change language
Route::get('language/{language}', 'Localization\LanguageController@changeLanguage');



// Page's routes
Route::get('/about', function () {
    return view('pages/about/about', ['page' => 'about']);
});
Route::get('/contact', function () {
    return view('pages/contact/contact', ['page' => 'contact']);
});
Route::get('/rehabilitation', function () {
    return view('pages/rehabilitation/rehabilitation', ['page' => 'rehabilitation']);
});
