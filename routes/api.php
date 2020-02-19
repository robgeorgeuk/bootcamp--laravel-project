<?php

use App\Http\Controllers\API\Articles;

Route::group(["prefix" => "articles"], function () {
    Route::get("", [Articles::class, "index"]);
    Route::post("", [Articles::class, "store"]);

    Route::group(["prefix" => "{article}"], function () {
        Route::get("", [Articles::class, "show"]);
        Route::put("", [Articles::class, "update"]);
        Route::delete("", [Articles::class, "destroy"]);
    });
});
