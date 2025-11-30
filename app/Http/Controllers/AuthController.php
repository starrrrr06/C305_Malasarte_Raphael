<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('authentication.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['logged_in' => true, 'user_email' => $user->email, 'role' => $user->role, 'name' => $user->name]);
            return redirect('/portfolio');
        }

        return redirect('/')->with('error', 'Invalid credentials');
    }

    public function showRegister()
    {
        return view('authentication.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect('/')->with('success', 'Account created successfully. Please login.');
    }

    public function logout()
    {
        session()->forget(['logged_in', 'user_email', 'role', 'name']);
        return redirect('/');
    }
}
