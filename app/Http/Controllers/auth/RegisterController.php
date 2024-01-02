<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input tambahan
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Alamat email harus diisi.',
            'email.email' => 'Alamat email harus valid.',
            'email.unique' => 'Alamat email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'role_id.required' => 'Role ID harus diisi.',
            'role_id.numeric' => 'Role ID harus berupa angka.',
            'role_id.in' => 'Role ID harus berisi angka 3.',
        ]);

        try {
            // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3,
            'nisn'=> "-",
            'kelas'=> "-",
            'jk'=> "-",
            'ttl'=> "-",
            'agama'=> "-",
            'bahasa'=> "-",
            'anak_ke'=> "-",
            'jumlah_saudara'=> "-",
            'alamat_siswa'=> "-",
            'no_telepon'=> "-",
            'tinggal_dengan'=> "-",
            'jarak_kesekolah'=> "-",
            'kendaraan'=> "-",
            'asal_sekolah'=> "-",
            'bb'=> "-",
            'tb'=> "-",
            'gol_darah'=> "-",
            'riwayat_penyakit'=> "-",
        ]);


            // Redirect atau lakukan tindakan lain setelah pendaftaran
            return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
        } catch (\Exception $e) {
            Log::error('Pendaftaran gagal: ' . $e->getMessage());
            throw $e;
        }
    }
}