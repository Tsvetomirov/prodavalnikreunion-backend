<?php

use Illuminate\Http\Request;



Route::prefix('v1')->group(function() {

    Route::prefix('users')->group(function() {
       Route::get('all','Api\UserController@all');
       Route::get('limit/{limit}','Api\UserController@limitRecords');
       Route::get('getcolumn/{column}','Api\UserController@onlyColumn');
       Route::get('allrelations','Api\UserController@allRelations');
    });

    Route::prefix('notices')->group(function() {
        Route::get('all','Api\NoticeController@all');
        Route::get('limit/{limit}','Api\NoticeController@limitRecords');
        Route::get('getcolumn/{column}','Api\NoticeController@onlyColumn');
        Route::get('allrelations','Api\NoticeController@allRelations');
    });

    Route::prefix('categories')->group(function() {
        Route::get('all','Api\CategoriesController@all');
        Route::get('limit/{limit}','Api\CategoriesController@limitRecords');
        Route::get('getcolumn/{column}','Api\CategoriesController@onlyColumn');
        Route::get('allrelations','Api\CategoriesController@allRelations');
    });

});
