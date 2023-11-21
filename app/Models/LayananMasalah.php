<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananMasalah extends Model
{
    use HasFactory;

    protected $table= "layanan_masalahs";

    protected $fillable = [
    'nama','kelas', 'masalah'
    ];
}
