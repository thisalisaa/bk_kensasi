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
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('foto_siswa');
            $table->string('nisn');
            $table->string('nama');
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswa');
    }
};
