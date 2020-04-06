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

Route::get('/CrimePost/create','CrimePostController@CreateCrimePost')->middleware('auth');

Route::get('/CrimePost','CrimePostController@CrimePostIndex');

Route::get('/CrimePost/{id}', 'CrimePostController@ShowPostByID')->middleware('auth');

Route::post('/CrimePost','CrimePostController@SavePost')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
