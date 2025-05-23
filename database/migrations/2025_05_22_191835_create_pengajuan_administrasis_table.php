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
        Schema::create('pengajuan_administrasi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis');
$table->string('status');
$table->unsignedBigInteger('mahasiswa_id');
$table->date('tanggal_pengajuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_administrasis');
    }
};
