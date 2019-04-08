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
    Route::get('/word/edit/{id}', [
        'uses' => 'WordsController@edit',
        'as' => 'word.edit'
    ]);
    Route::post('/word/update/{id}', [
        'uses' => 'WordsController@update',
        'as' => 'word.update'
    ]);
    Route::get('/word/trash/{id}', [
        'uses' => 'WordsController@destroy',
        'as' => 'word.trash'
    ]);
    Route::get('/words/trashed', [
        'uses' => 'WordsController@trashed',
        'as' => 'words.trashed'
    ]);
    Route::get('/word/delete/{id}', [
        'uses' => 'WordsController@kill',
        'as' => 'word.delete'
    ]);
    Route::get('/word/restore/{id}', [
        'uses' => 'WordsController@restore',
        'as' => 'word.restore'
    ]);
});
