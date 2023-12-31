<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbuTable extends Migration
{
    public function up()
    {
        Schema::create('ibu', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pendidikan_terakhir');
            $table->text('alamat_lengkap');
            $table->string('nomor_telepon');
            $table->string('pekerjaan');
            $table->decimal('penghasilan', 10, 2);
            // Add other Ayah fields as needed
            $table->unsignedBigInteger('ibu_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibu');
    }
}