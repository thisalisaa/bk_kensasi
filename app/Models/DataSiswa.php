<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DataSiswa extends Model
{
    use HasFactory;

    protected $table = 'data_siswa';
    protected $primaryKey = 'id_siswa'; // Menentukan kunci utama yang benar
    protected $fillable = [
        'id_siswa',
        'foto_siswa',
        'nisn',
        'nama',
        'kelas',
        'jk',
        'ttl',
        'agama',
        'bahasa',
        'anak_ke',
        'jumlah_saudara',
        'alamat_siswa',
        'no_telepon',
        'tinggal_dengan',
        'jarak_kesekolah',
        'kendaraan',
        'asal_sekolah',
        'bb',
        'tb',
        'gol_darah',
        'riwayat_penyakit',
    ];
}
