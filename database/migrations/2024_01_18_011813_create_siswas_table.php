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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->integer('kode_kelas')->nullable(false);
            $table->char('id_jurusan',10)->nullable(false);
            $table->string('nama_siswa',225)->nullable(false);
            $table->string('sosial_media',225)->nullable(false);
            $table->text('quotes')->nullable(false);
            $table->string('foto_siswa')->nullable(false);

            $table->foreign('kode_kelas')->on('kelas')->references('kode_kelas');
            $table->foreign('id_jurusan')->on('jurusans')->references('id_jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
