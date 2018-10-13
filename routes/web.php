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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('home');

Route::get('/forms', function () {
    return view('pages.forms');
});

Route::get('/buttons', function () {
    return view('pages.buttons');
});

Route::get('/ui', function () {
    return view('pages.ui');
});

Route::get('/404', function () {
    return view('pages.404');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
