<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // tambahan untuk role id ditable role
            $table->unsignedBigInteger('role_id');
            // $table->string('foto_siswa');
            $table->string('nisn');
            $table->string('kelas');
            $table->string('jk');
            $table->string('ttl');
            $table->string('agama');
            $table->string('bahasa');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('alamat_siswa');
            $table->string('no_telepon');
            $table->string('tinggal_dengan');
            $table->string('jarak_kesekolah');
            $table->string('kendaraan');
            $table->string('asal_sekolah');
            $table->string('bb');
            $table->string('tb');
            $table->string('gol_darah');
            $table->string('riwayat_penyakit');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
