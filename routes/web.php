<?php


Route::get('/', "Articles@index");
Route::get('/articles/{article}', "Articles@show");
Route::get('/search', "Articles@search");
