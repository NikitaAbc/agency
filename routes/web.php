<?php

Auth::routes();

Route::group(["prefix"=>"admin", "middleware"=>"auth", "namespace"=>"Admin", "as"=>"admin."],function(){

    Route::get('/',"HomeController@index");
    Route::resource('/pages',"PageController");

    Route::resource('/articles',"ArticleController",["except" => ["store","edit"]]);
    Route::delete('/articles',"ArticleController@destroy");

    Route::post('/articles/create',"ArticleController@add");

    Route::get('/contacts',"ContactController@index")->name("contacts.index");
    Route::put('/contacts',"ContactController@update");

});

Route::get('{url?}', "SiteController@index");



