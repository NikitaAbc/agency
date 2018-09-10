<?php

Auth::routes();

Route::group(["prefix"=>"admin", "middleware"=>"auth", "namespace"=>"Admin", "as"=>"admin."],function(){

    Route::get('/',"HomeController@index");

   // Route::resource('/pages',"PageController");

    Route::resource('/services',"ServiceController");
    Route::post("services/create","ServiceController@add");
    Route::delete('/services',"ServiceController@destroy");


    Route::resource('/articles',"ArticleController",["except" => ["store","edit"]]);
    Route::post('/articles/create',"ArticleController@add");
    Route::delete('/articles',"ArticleController@destroy");



    Route::get('/contacts',"ContactController@index")->name("contacts.index");
    Route::put('/contacts',"ContactController@update");

});

Route::get('{url?}', "SiteController@index");



