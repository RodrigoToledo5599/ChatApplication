<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Services\AuthService;
use App\Enum\ErrorMessages;

class AuthController extends Controller
{
    protected $auth_service;
    function __construct(
        AuthService $auth_service,
    ){
        $this->auth_service = $auth_service;
    }


    public function Login(Request $request){
        $email = $request["email"];
        $password = $request["password"];
        if($email == null || $password ==null){
            return view('login',["message" => ErrorMessages::SenhaEOuEmailNulo]);
        }
        $result = $this->auth_service->CreateAuthToken($email,$password);
        if($result == ErrorMessages::TokenCouldNotBeCreated){
            return view('login',["message" => ErrorMessages::AuthenticationError]);
        }
        $request->session()->start();
        $request->session()->put('auth_token', $result);

        return redirect('/home');
    }   
}
