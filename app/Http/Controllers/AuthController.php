<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    
    public function regis_post(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $data['password']= bcrypt($data['password']);

        user::create($data);

        Session::flash('success', 'Registrasi berhasil! Silakan masuk ke akun Anda.');

        return view('auth.login');
}

    public function login()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
    
            return redirect()->route('home_user'); // Ganti 'home_user' dengan nama route yang sesuai
        }
    
        return back()->with('error', 'Email atau password salah');
    }
}
