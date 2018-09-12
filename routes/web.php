<?php

Auth::routes();

Route::group(["prefix"=>"admin", "middleware"=>"auth", "namespace"=>"Admin", "as"=>"admin."],function(){

    Route::get('/',"HomeController@index");

    Route::get('/pages',"PageController@index")->name("pages.index");
    Route::put("/pages","PageController@update");

    Route::get("/pages/{route}/edit","PageController@edit")->name("pages.edit");
    Route::post("/pages/{route}/edit","PageController@store");

    Route::resource('/services',"ServiceController",["except"=>["show","update","destroy"]]);
    Route::delete('/services',"ServiceController@remove");
    Route::post("services/create","ServiceController@add");
    Route::put('/services/{route}/edit',"ServiceController@update");

    Route::resource('/articles',"ArticleController",["except" => ["store","edit"]]);
    Route::post('/articles/create',"ArticleController@add");
    Route::delete('/articles',"ArticleController@destroy");

    Route::get("/slides","SlideController@index")->name("slides.index");
    Route::post("/slides/edit","SlideController@edit");


    Route::get('/contacts',"ContactController@index")->name("contacts.index");
    Route::put('/contacts',"ContactController@update");

});

Route::get('{url?}', "SiteController@index");



