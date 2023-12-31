<?php

// database/migrations/YYYY_MM_DD_create_ayahs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyahsTable extends Migration
{
    public function up()
    {
        Schema::create('ayah', function (Blueprint $table) {
            $table->id_ayah();
            $table->string('nama');
            $table->string('pendidikan_terakhir');
            $table->text('alamat_lengkap');
            $table->string('nomor_telepon');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ayah');
    }
}
