<?php
namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\support\DB;

class profilController extends Controller
{

    public function show()
    {
        $user = Auth::user(); // Mengambil informasi user yang sedang login
        return view('profil.profil', compact('user'));
    }

    public function updatePhoto(Request $request)
    {
        // Logika untuk mengupdate foto disini
        // $request->file('foto') mengandung file foto yang diupload

        return redirect()->route('profil.profil')->with('success', 'Foto berhasil diperbarui!');
    }

    public function updateProfile(Request $request)
    {
        // Logika untuk memperbarui username dan email disini
        // $request->input('username') dan $request->input('email') mengandung data yang diinputkan

        return redirect()->route('profil.profil')->with('success', 'Profil berhasil diperbarui!');
    }

    public function changePassword(Request $request)
    {
        // Logika untuk mengganti password disini
        // $request->input('password') mengandung password baru

        return redirect()->route('profil.profil')->with('success', 'Password berhasil diperbarui!');
    }
    
    public function cancelEdit()
    {
        return redirect()->route('profil.profil');
    }
}
