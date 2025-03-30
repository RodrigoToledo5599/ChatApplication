<?php

namespace App\Http\Services;

use Auth;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use App\Enum\ErrorMessages;


class AuthService {

    public function CreateAuthToken($email, $password){
        if (Auth::attempt(["email" => $email, "password" => $password])) {
            $token = Auth::user()->createToken('auth_token')->plainTextToken;
            return $token;
        }
        return ErrorMessages::TokenCouldNotBeCreated;
    }   
}