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

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);
    Route::get('/word/create', [
        'uses' => 'WordsController@create',
        'as' => 'word.create'
    ]);
    Route::post('/word/store', [
        'uses' => 'WordsController@store',
        'as' => 'word.store'
    ]);
    Route::get('/words', [
        'uses' => 'WordsController@index',
        'as' => 'words'
    ]);
});
