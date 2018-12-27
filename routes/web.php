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

// No need to ad authentication routes for now
// Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/review', 'HomeController@review')->name('review');
Route::get('/new', 'HomeController@new_method')->name('new');
