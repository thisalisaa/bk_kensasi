<?php

// app/Models/Ayah.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $table = 'ayah'; // Sesuaikan dengan nama tabel yang digunakan di database

    protected $fillable = [
        'nama',
        'pendidikan_terakhir',
        'alamat_lengkap',
        'nomor_telepon',
        'pekerjaan',
        'penghasilan',
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class);
    }
}
    // Jika diperlukan, Anda juga dapat menambahkan relasi atau metode lain di sini.

