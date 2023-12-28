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
        Schema::create('keteranganlains', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan1');
            $table->string('keterangan2');
            $table->string('keterangan3');
            $table->string('keterangan4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keteranganlains');
    }
};


