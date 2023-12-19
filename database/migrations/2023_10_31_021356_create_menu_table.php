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
        Schema::create('menu', function (Blueprint $table) {
           $table->id('menu_id');
       $table->string('nama_menu');
       $table->integer('harga');
       $table->text('deskripsi');
       $table->integer('jenis_id');

    //    $table->foreign('jenis_id')->references('jenis_id')->on('jenis_makanan');
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
