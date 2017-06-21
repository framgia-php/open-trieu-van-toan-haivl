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

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'category'], function() {
        Route::get('index', ['as' => 'category.index', 'uses' => 'CateController@index']);
        Route::get('create', ['as' => 'category.create', 'uses' => 'CateController@create']);
        Route::post('store', ['as' => 'category.store', 'uses' => 'CateController@store']);
        Route::get('edit/{id}', ['as' => 'category.edit', 'uses' => 'CateController@edit']);
        Route::post('update/{id}', ['as' => 'category.update', 'uses' => 'CateController@update']);
        Route::get('destroy/{id}', ['as' => 'category.destroy', 'uses' => 'CateController@destroy']);
    });
});
