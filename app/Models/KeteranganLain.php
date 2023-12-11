<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class KeteranganLain extends Model
{
    use HasFactory;

    protected $table='keterangan_lains';
    
    protected $fillable = [
        'keterangan1','keterangan2', 'keterangan3', 'keterangan4'
    ];
}
