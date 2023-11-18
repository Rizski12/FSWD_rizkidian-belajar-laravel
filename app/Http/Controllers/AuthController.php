<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->intended('/')->with('auth-success', 'Login berhasil!');
        }

        // Jika gagal, redirect ke halaman login dengan pesan error
        return redirect()->back()->withInput()->with('failed', 'Email atau password salah');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $userData = $request->only('name', 'email', 'phone_number', 'username', 'password');
        $userData['password'] = Hash::make($userData['password']);

        Users::create($userData);

        return redirect('/login')->with('auth-success', 'Registration successful! Please login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('auth-success','Anda Berhasil Logout');
    }
}