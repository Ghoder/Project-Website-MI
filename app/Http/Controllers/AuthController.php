<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.registrasi');
    }

    // Proses registrasi
    public function register(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed'
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'user' // Default role user
    ]);

    return redirect()->route('pilihan.login')->with('success', 'Registrasi berhasil! Silakan pilih jenis login.');
    }


    public function showAdminLoginForm()
    {
        return View('auth.adminlogin');
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect ke dashboard admin
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->with('error', 'Anda bukan admin.');
            }
        }

        return redirect()->route('admin.login')->with('error', 'Email atau password salah.');
    }

    public function showUserLoginForm()
    {
        return view('auth.userlogin');
    }

    public function userLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'user') {
                return redirect()->route('user.dashboard'); // Redirect ke dashboard user
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Anda bukan siswa.');
            }
        }

        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
}