<?php

    Route::post('register', 'Auth\RegisterController@register');
    Route::get('verifyEmail/{token}', 'Auth\RegisterController@verifyEmail')->name('verify.email');
    Route::post('checkEmail', 'Auth\RegisterController@checkEmail');
    Route::post('login', 'Auth\LoginController@login');

    // TODO: Actually check the token. The jwt.auth middleware is broken as hell and doesn't even let the request reach the controller.
    Route::group(['before' => 'jwt.refresh', 'middleware' => 'jwt.auth'], function () {
        Route::get('user', 'Auth\LoginController@getUser');
        /*Route::get('search/category/', 'CategoryController@getCategories');
        Route::post('category/save', 'CategoryController@saveCategory');
        Route::post('category/delete', 'CategoryController@deleteCategory');*/

        // Category Routes
        Route::group(['prefix' => 'category'], function () {
            Route::get('search', [
                'uses' => 'CategoryController@search',
                'as' => 'category.index'
            ]);

            Route::post('store', [
                'uses' => 'CategoryController@store',
                'as' => 'category.store'
            ]);

            Route::delete('{id}/delete', [
                'uses' => 'CategoryController@delete',
                'as' => 'category.delete'
            ]);
        });

    });
