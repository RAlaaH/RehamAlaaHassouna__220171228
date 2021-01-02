<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        //dd($request->toArray());

        $login_data = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($login_data)) {
            return redirect()->route('dashboard.home');
        }

        return redirect()->back()->with('error', 'login failed');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect()->route('frontWebSite.home');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function do_register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'name' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success','user created successfully');
    }
}
