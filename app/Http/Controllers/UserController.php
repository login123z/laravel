<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public  function  create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);
        \App\Models\User::create($validated);
        return redirect()->route('login')->with('success', 'User Created Successfully');
    }

    public function loginForm()
    {
        return view('users.login-form');
    }

    public  function loginAuth(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validated)) {
            return redirect()->intended('/')->with('success', 'You are now logged in');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
