<?php

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
    Route::get('/', 'AdminController@index')->name('moduloAdmin');

    Route::get('category/{category}/delete', 'CategoryController@delete')->name('deleteCategory');
    Route::resource('category', 'CategoryController');

    Route::get('article/{article}/delete', 'ArticleController@delete')->name('deleteArticle');
    Route::resource('article', 'ArticleController');

    Route::resource('user', 'UserController', ['only' => ['edit', 'update']]);

});

