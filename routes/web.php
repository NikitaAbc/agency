<?php

Auth::routes();

Route::group(["prefix"=>"admin", "middleware"=>"auth", "namespace"=>"Admin", "as"=>"admin."],function(){

    Route::get('/',"HomeController@index");

    Route::get('/pages',"PageController@index")->name("pages.index");
    Route::put("/pages","PageController@update");

    Route::get("/pages/edit/{route?}","PageController@edit")->name("pages.edit");
    Route::post("/pages/edit/{route?}","PageController@store");

    Route::resource('/services',"ServiceController",["except"=>["show","destroy"]]);
    Route::delete('/services',"ServiceController@remove");
    Route::post("services/create","ServiceController@add");
    Route::put('/services/{route}/edit',"ServiceController@update");

    Route::resource('/articles',"ArticleController",["except" => ["store","edit"]]);
    Route::post('/articles/create',"ArticleController@add");
    Route::delete('/articles',"ArticleController@destroy");

    Route::get("/slides","SlideController@index")->name("slides.index");
    Route::post("/slides/edit","SlideController@edit");
    Route::post("/slides/store","SlideController@store");
    Route::delete("/slides","SlideController@destroy");

    Route::get('/contacts',"ContactController@index")->name("contacts.index");
    Route::get('/contacts/edit',"ContactController@edit")->name("contacts.edit");
    Route::put('/contacts/edit',"ContactController@update");

});

Route::get('{url?}', "SiteController@index");

Route::post("kontakty/send","ContactController@send");



