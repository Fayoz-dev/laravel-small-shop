<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('welcome');
    }

    public function register_store(RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated ['password'] = Hash::make($validated ['password']);

        $user = User::create($validated);
        $user -> role_id = User::ROLE_USER;
        $user->save();
        auth()->login($user);

        return redirect('home')->with('success', "Account successfully registered.");


    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('home')->with('success', "Account successfully registered.");
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register()
    {

        return view('auth.register');
    }


}
