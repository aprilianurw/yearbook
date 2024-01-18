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
        Schema::create('seragams', function (Blueprint $table) {
            $table->char('id_seragam',10)->nullable(false)->primary();
            $table->char('id_sekolah',10)->nullable(false);
            $table->string('nama_seragam',50)->nullable(false);
            $table->string('foto_seragam')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seragams');
    }
};
