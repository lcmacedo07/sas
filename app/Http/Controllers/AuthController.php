<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response([
                'error' => 'Credenciais inválidas'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();
        $token = $user->createToken('default')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24);


        return response([
            'token' => $token,
            'user' => $user,
        ])->withCookie($cookie);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();

        $user->tokens()->delete();

        $cookie = Cookie::forget('jwt');

        return response(['message' => 'Logout successful'])->withCookie($cookie);
    }
}
