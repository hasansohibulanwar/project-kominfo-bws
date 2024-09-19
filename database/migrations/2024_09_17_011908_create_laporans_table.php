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
    Schema::create('laporans', function (Blueprint $table) {
        $table->id();
        $table->string('classification'); // Klasifikasi Laporan
        $table->string('title');          // Judul Laporan
        $table->text('content');          // Isi Laporan
        $table->date('date');             // Tanggal Kejadian
        $table->string('location');       // Lokasi Kejadian
        $table->string('institution');    // Instansi Tujuan
        $table->string('category');       // Kategori Laporan
        $table->string('file')->nullable(); // Upload Lampiran (opsional)
        $table->string('privacy');        // Privasi Laporan (anonim/rahasia)
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('laporans');
}

};
