<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $loginData = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($loginData)){
            $user = Auth::user();
            $token = $user->createToken('my api token')->accessToken;

            return response([
                'status'=>'success',
                'token'=>$token
            ]);
        }

        return response([
            'status'=>'error',
            'message'=>'invalid authentication'
        ]);
    }
}
