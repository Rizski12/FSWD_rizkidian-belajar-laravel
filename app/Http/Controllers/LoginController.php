<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->group_id == 2) {
            return redirect('/toko')->with('auth-success', 'Login berhasil!');
        }

        return redirect('/dashboard')->with('auth-success', 'Login berhasil!');
}

    return redirect()->back()->withInput()->with('failed', 'Email atau password salah');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('auth-success', 'Anda Berhasil Logout');
    }
}
