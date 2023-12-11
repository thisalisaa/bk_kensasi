<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;

    protected $table= 'informasi';

    protected $fillable = [
        'judul_informasi','pembuat', 'tanggal_informasi','foto', 'isi_informasi'
    ];

    
}
