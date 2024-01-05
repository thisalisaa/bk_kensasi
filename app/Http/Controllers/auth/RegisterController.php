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
            'nisn'=> 'required|string',
            'kelas'=> 'required|string',
            'jk'=> 'required|string',
            'ttl'=> 'required|string',
            'agama'=> 'required|string',
            'bahasa'=> 'required|string',
            'anak_ke'=> 'required|string',
            'jumlah_saudara'=> 'required|string',
            'alamat_siswa'=> 'required|string',
            'no_telepon'=> 'required|string',
            'tinggal_dengan'=> 'required|string',
            'jarak_kesekolah'=> 'required|string',
            'kendaraan'=> 'required|string',
            'asal_sekolah'=> 'required|string',
            'bb'=> 'required|string',
            'tb'=> 'required|string',
            'gol_darah'=> 'required|string',
            'riwayat_penyakit'=> 'required|string',
            'nama_ayah'=> 'required|string',
            'pendidikan_terakhir_ayah'=> 'required|string',
            'alamat_lengkap_ayah'=> 'required|string',
            'nomor_telepon_ayah'=> 'required|string',
            'pekerjaan_ayah'=> 'required|string',
            'penghasilan_ayah'=> 'required|string',
            'nama_ibu'=> 'required|string',
            'pendidikan_terakhir_ibu'=> 'required|string',
            'alamat_lengkap_ibu'=> 'required|string',
            'nomor_telepon_ibu'=> 'required|string',
            'pekerjaan_ibu'=> 'required|string',
            'penghasilan_ibu'=> 'required|string',
            'penghasilan'=> 'required|string',
            'keterangan1'=> 'required|string',
            'keterangan2'=> 'required|string',
            'keterangan3'=> 'required|string',
            'keterangan4'=> 'required|string',
            'keterangan5'=> 'required|string',
            'keterangan6'=> 'required|string',
            'keterangan7'=> 'required|string',
            'keterangan8'=> 'required|string',
            'keterangan9'=> 'required|string',
            'keterangan10'=> 'required|string',
            'keterangan11'=> 'required|string',
            'keterangan12'=> 'required|string',
            'keterangan13'=> 'required|string',
            'keterangan14'=> 'required|string',
            'keterangan15'=> 'required|string',

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
            'nama_ayah'=> "-",
            'pendidikan_terakhir_ayah'=> "-",
            'alamat_lengkap_ayah'=> "-",
            'nomor_telepon_ayah'=> "-",
            'pekerjaan_ayah'=> "-",
            'penghasilan_ayah'=> "-",
            'nama_ibu'=> "-",
            'pendidikan_terakhir_ibu'=> "-",
            'alamat_lengkap_ibu'=> "-",
            'nomor_telepon_ibu'=> "-",
            'pekerjaan_ibu'=> "-",
            'penghasilan_ibu'=> "-",
            'penghasilan'=> "-",
            'keterangan1'=> "-",
            'keterangan2'=> "-",
            'keterangan3'=> "-",
            'keterangan4'=> "-",
            'keterangan5'=> "-",
            'keterangan6'=> "-",
            'keterangan7'=> "-",
            'keterangan8'=> "-",
            'keterangan9'=> "-",
            'keterangan10'=> "-",
            'keterangan11'=> "-",
            'keterangan12'=> "-",
            'keterangan13'=> "-",
            'keterangan14'=> "-",
            'keterangan15'=> "-",

            
        ]);


            // Redirect atau lakukan tindakan lain setelah pendaftaran
            return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
        } catch (\Exception $e) {
            Log::error('Pendaftaran gagal: ' . $e->getMessage());
            throw $e;
        }
    }
}