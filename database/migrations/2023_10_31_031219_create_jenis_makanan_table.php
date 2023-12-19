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
        Schema::create('jenis_makanan', function (Blueprint $table) {
          $table->id('jenis_id');
 $table->string('nama_jenis');
 $table->foreignId('kategori_id');
 $table->timestamps();
 $table->foreign('kategori_id')->references('kategori_id')->on('kategori_makanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_makanan');
    }
};
