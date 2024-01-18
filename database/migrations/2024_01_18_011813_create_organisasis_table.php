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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->char('id_organisasi',10)->nullable(false)->primary();
            $table->char('id_sekolah',10)->nullable(false);
            $table->bigInteger('id_siswa')->nullable(false);
            $table->string('nama_organisassi',225)->nullable(false);
            $table->string('foto_organisasi')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasis');
    }
};
