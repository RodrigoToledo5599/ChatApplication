<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("/login",[
        "message"=> ""
    ]);
});

Route::get('/home', function () {
    return view("/home");
});
