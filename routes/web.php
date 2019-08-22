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

Route::get('/master', function () {
    return view('backend.dashboard');
});

Route::get('/form', function () {
    return view('backend.form');
});

Route::get('/table', function () {
    return view('backend.table');
});

Route::get('/admin/login', function () {
    return view('backend.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
