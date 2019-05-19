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

Route::group(['middleware' => 'locale'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/posts', 'PostController@index')->name('posts.list');
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts/create', 'PostController@store')->name('posts.store');
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');
});

