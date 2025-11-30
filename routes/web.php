<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('authentication.login');
});

Route::get('/portfolio', function () {
    if (!session()->has('logged_in')) {
        return redirect('/');
    }
    return view('portfolio');
});

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    $users = session('users', []);

    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        session(['logged_in' => true, 'user_email' => $email]);
        return redirect('/portfolio');
    }

    return redirect('/')->with('error', 'Invalid credentials');
});

Route::get('/logout', function () {
    session()->forget(['logged_in', 'user_email']);
    return redirect('/');
});

Route::get('/register', function () {
    return view('authentication.register');
});

Route::post('/register', function (\Illuminate\Http\Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');
    $password_confirmation = $request->input('password_confirmation');

    if ($password !== $password_confirmation) {
        return redirect('/register')->with('error', 'Passwords do not match');
    }

    $users = session('users', []);

    if (isset($users[$email])) {
        return redirect('/register')->with('error', 'Email already exists');
    }

    $users[$email] = ['password' => $password];
    session(['users' => $users]);

    return redirect('/')->with('success', 'Account created successfully. Please login.');
});
