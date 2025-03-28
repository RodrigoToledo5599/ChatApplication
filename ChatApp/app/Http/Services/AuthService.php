<?php

namespace App\Http\Services;

use Auth;
use Illuminate\Http\Request;
use App\Enum\ErrorMessages;


class AuthService {

    public function CreateAuthToken($email, $password){
        if (Auth::attempt(["email" => $email, "password" => $password])) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return ["token" => $token];
        }
        else{
            return ["token" => ErrorMessages::AuthenticationError];
        }
    }   
}