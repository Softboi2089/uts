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
        Schema::table('dosens', function (Blueprint $table) {
            $table->string('email')->unique()->nullable(false);
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('status')->nullable();
            $table->text('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->dropColumn(['email', 'nama', 'nip', 'no_hp', 'program_studi', 'status', 'alamat']);
        });
    }
};
