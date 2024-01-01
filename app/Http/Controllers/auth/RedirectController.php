<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedirectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cek() {
        // Cek apakah pengguna terautentikasi
        if (auth()->check()) {
            $userRole = auth()->user()->role_id;

            switch ($userRole) {
                case 1:
                    return redirect('/superadmin');
                case 2:
                    return redirect('/guru');
                case 3:
                    return redirect('/siswa');
                default:
                    // Pengguna dengan peran lain atau tidak ada peran
                    // Dapat ditangani dengan tindakan sesuai kebijakan Anda
                    return redirect('/home'); // Gantilah dengan rute yang sesuai
            }
        } else {
            // Jika pengguna tidak terautentikasi, arahkan ke halaman login
            return redirect('/login');
        }
    }
    
    
    
}
