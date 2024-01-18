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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->char('id_sekolah',10)->nullable(false)->primary();
            $table->string('nama_sekolah',255)->nullable(false);
            $table->text('deskripsi')->nullable(false);
            $table->integer('angkatan')->nullable(false);
            $table->string('foto_kepala_sekolah')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
