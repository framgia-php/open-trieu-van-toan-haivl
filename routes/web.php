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

    Route::group(['prefix' => 'image'], function() {
        Route::get('index', ['as' => 'image.index', 'uses' => 'ProductController@index']);
        Route::get('create', ['as' => 'image.create', 'uses' => 'ProductController@create']);
        Route::post('store', ['as' => 'image.store', 'uses' => 'ProductController@store']);
        Route::get('edit/{id}', ['as' => 'image.edit', 'uses' => 'ProductController@edit']);
        Route::post('update/{id}', ['as' => 'image.update', 'uses' => 'ProductController@update']);
        Route::get('destroy/{id}', ['as' => 'image.destroy', 'uses' => 'ProductController@destroy']);
        Route::get('delimg/{id}', ['as' => 'image.delimg', 'uses' => 'ProductController@delimg']);
    });
});
