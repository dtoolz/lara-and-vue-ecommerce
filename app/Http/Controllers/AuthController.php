<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
       $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => 'required',
           'remember' => 'boolean',
       ]);
       $remember = $credentials['remember'] ?? false;
       unset($credentials['remember']);
       if(!Auth::attempt($credentials, $remember))
       {
          return response([
            'message' => 'Email or Password is Invalid'
          ], 422);
       }
       $user = Auth::user();
       if(!$user->is_admin)
       {
          Auth::logout();
          return response([
            'message' => 'You dont\'t have permission to access as admin'
          ], 403);
       }
       $token = $user->createToken('main')->plainTextToken;
           return response([
              'user' =>$user,
              'token' =>$token,
           ]);
    }

    public function logout()
    {
       $user = Auth::user();
       $user->currentAccesstoken()->delete();
       return response('', 204);
    }
}
