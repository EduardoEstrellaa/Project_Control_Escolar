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
        Schema::create('temas_asignaturas', function (Blueprint $table) {
            $table->unsignedBigInteger('idtemas_asignaturas')->primary();
            $table->unsignedBigInteger('asignaturas_idasignaturas');
            $table->string('nombre_tema');

            $table->foreign('asignaturas_idasignaturas')->references('idasignaturas')->on('asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas_asignaturas');
    }
};
