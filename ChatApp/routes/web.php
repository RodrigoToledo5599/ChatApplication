<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AccountAuth;

Route::get('/', function () {
    return view("/login",[
        "message"=> ""
    ]);
});
Route::get('/home', function () {
    return view("/home");
})->middleware(AccountAuth::class);
Route::post('/login-user', [AuthController::class,'Login']);
