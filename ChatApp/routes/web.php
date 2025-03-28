<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view("/login",[
        "message"=> ""
    ]);
});

Route::get('/home', function () {
    return view("/home");
});

Route::post('/login-user', [AuthController::class,'Login']);
