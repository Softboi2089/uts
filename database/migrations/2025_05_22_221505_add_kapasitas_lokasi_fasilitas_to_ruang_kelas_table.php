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
        Schema::table('ruang_kelas', function (Blueprint $table) {
            $table->integer('kapasitas')->nullable();
            $table->string('lokasi')->nullable();
            $table->text('fasilitas')->nullable();
            $table->string('kode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ruang_kelas', function (Blueprint $table) {
            $table->dropColumn(['kapasitas', 'lokasi', 'fasilitas', 'kode']);
        });
    }
};
