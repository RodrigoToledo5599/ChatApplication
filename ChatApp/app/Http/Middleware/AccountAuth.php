<?php

namespace App\Http\Middleware;

use Closure;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Enum\ErrorMessages;
use Auth;

class AccountAuth
{
  
    public function handle(Request $request, Closure $next): Response
    {
        $token = session()->get('auth_token');
        if (!$token){
            return response()->json(['message' => ErrorMessages::SessionExpiradaOuTokenNaoExistente], 401);
        }
        $accessToken = PersonalAccessToken::findToken($token);
        if (!$accessToken) {
            return response()->json(['message' => ErrorMessages::SessionExpiradaOuTokenNaoExistente], 401);
        }
        return $next($request);
    }
}
