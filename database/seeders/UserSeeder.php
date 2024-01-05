<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // database/seeders/UserSeeder.php

public function run()
{
    User::create([
        'name' => 'admin',
        'email' => 'superadmin@example.com',
        'password' => Hash::make('password'),
        'role_id' => '1',
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

    User::create([
        'name' => 'Guru1',
        'email' => 'guru1@example.com',
        'password' => Hash::make('password1'),
        'role_id' => '2',
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

    User::create([
        'name' => 'Guru2',
        'email' => 'guru2@example.com',
        'password' => Hash::make('password2'),
        'role_id' => '2',
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

    User::create([
        'name' => 'Guru3',
        'email' => 'guru3@example.com',
        'password' => Hash::make('password3'),
        'role_id' => '2',
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

    User::create([
        'name' => 'Guru4',
        'email' => 'guru4@example.com',
        'password' => Hash::make('password4'),
        'role_id' => '2',
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
    

}
}
