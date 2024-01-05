<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,CanResetPassword;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'nisn',
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
        'nama_ayah',
            'pendidikan_terakhir_ayah',
            'alamat_lengkap_ayah',
            'nomor_telepon_ayah',
            'pekerjaan_ayah',
            'penghasilan_ayah',
            'nama_ibu',
            'pendidikan_terakhir_ibu',
            'alamat_lengkap_ibu',
            'nomor_telepon_ibu',
            'pekerjaan_ibu',
            'penghasilan_ibu',

            'keterangan1',
            'keterangan2',
            'keterangan3',
            'keterangan4',
            'keterangan5',
            'keterangan6',
            'keterangan7',
            'keterangan8',
            'keterangan9',
            'keterangan10',
            'keterangan11',
            'keterangan12',
            'keterangan13',
            'keterangan14',
            'keterangan15',
    ];    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // inverse one to Many ke tabel role
    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    

}