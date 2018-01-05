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

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/devops', function () {
    return view('devops');
});

Route::get('/bsa', function () {
    return view('bsa');
});
Route::get('/aws', function () {
    return view('aws');
});
Route::get('/careers', function () {
    return view('careers');
});
Route::get('/sql', function () {
    return view('sql');
});
Route::get('/qa', function () {
    return view('qa');
});
Route::post('/newRegistration','UserController@newRegistration');