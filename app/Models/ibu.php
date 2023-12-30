<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $table = 'ibu'; // Sesuaikan dengan nama tabel yang digunakan di database

    protected $fillable = [
        'nama',
        'pendidikan_terakhir',
        'alamat_lengkap',
        'nomor_telepon',
        'pekerjaan',
        'penghasilan',
    ];

    public function ayah()
    {
        return $this->hasMany(Ayah::class);
    }
    // Jika diperlukan, Anda juga dapat menambahkan relasi atau metode lain di sini.
}
