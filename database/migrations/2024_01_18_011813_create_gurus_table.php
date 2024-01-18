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
        Schema::create('gurus', function (Blueprint $table) {
            $table->char('id_guru',10)->nullable(false)->primary();
            $table->integer('kode_kelas')->nullable(false);
            $table->char('id_sekolah',10)->nullable(false);
            $table->string('nama_guru',225)->nullable(false);
            $table->string('biodata',255)->nullable(false);
            $table->string('foto')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
