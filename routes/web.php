<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PublicController@index')->name('index');

Route::prefix('alhalal')->group(function () {
    // Route::get('/', 'PublicController@index')->name('index');
    Route::get('/about', 'PublicController@about')->name('about');
    Route::get('/career', 'PublicController@career')->name('career');
    Route::get('/news', 'PublicController@news')->name('news');
    Route::get('/news/{id}', 'PublicController@singleNews');
    Route::get('/gallery', 'PublicController@gallery')->name('gallery');
    Route::get('/contact', 'PublicController@contact')->name('contact');
    Route::get('/why-choose-us', 'PublicController@whyChoose')->name('choose');
    Route::get('/application/form', 'PublicController@applicationForm')->name('appform');
    Route::get('/admission/procedure', 'PublicController@admission')->name('admission');
    Route::get('/tuition/payment', 'PublicController@tuition')->name('tuition');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('admin')->group(function(){


Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');

});