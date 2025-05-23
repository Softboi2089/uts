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
        Schema::create('laporan_penelitian_dosen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul');
$table->string('jenis');
$table->date('tanggal');
$table->unsignedBigInteger('dosen_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_penelitian_dosens');
    }
};
