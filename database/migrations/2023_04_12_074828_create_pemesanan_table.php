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
        Schema::create('pemesanan', function (Blueprint $table) {
            //$table->id('');
            $table->integer('nomor_antrian');
            $table->string('nama_pembeli');
            $table->string('nama_menu');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->text('catatan');
            $table->timestamps();
            $table->unique(array('nomor_antrian'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
