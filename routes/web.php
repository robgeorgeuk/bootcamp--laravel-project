<?php

Route::get('/', "Articles@index");
Route::get('/search', "Articles@search");

Route::group(["prefix" => "articles"], function () {
    Route::get('create', "Articles@create");
    Route::post('create', "Articles@createPost");
    Route::get('{article}', "Articles@show");
    Route::get('{article}/edit', "Articles@edit");
    Route::post('{article}/edit', "Articles@editPost");
});
