<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function login() {
        return view('auth.login');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                // Jika pengguna adalah superadmin
                return redirect()->intended('/superadmin');
            } elseif (auth()->user()->role_id === 2) {
                // Jika pengguna adalah guru
                return redirect()->intended('/guru');
            } elseif (auth()->user()->role_id === 3) {
                // Jika pengguna adalah siswa
                return redirect()->intended('/siswa');
            } else {
                // Jika pengguna memiliki peran lain atau tidak ada peran
                return redirect()->intended('/home'); // Gantilah dengan rute yang sesuai
            }
            
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
