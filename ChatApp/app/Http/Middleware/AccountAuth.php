<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AccountAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('auth_token')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $token = $request->session()->get('auth_token');
        if(Auth::check()){
            return $next($request);
        }
    }
}
