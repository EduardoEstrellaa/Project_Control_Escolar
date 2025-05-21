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
        Schema::create('especialidades', function (Blueprint $table) {
            $table->unsignedBigInteger('idespecialidades')->primary();
            $table->unsignedBigInteger('carrera_idcarrera');
            $table->string('nombre_especialidad');

            $table->foreign('carrera_idcarrera')->references('idcarrera')->on('carrera');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialidades');
    }
};
