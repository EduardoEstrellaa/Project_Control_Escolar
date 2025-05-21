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
        Schema::create('inscripciones_alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('idinscripciones_alumnos')->primary();
            $table->unsignedBigInteger('alumnos_idalumnos');
            $table->unsignedBigInteger('carrera_idcarrera');
            $table->unsignedBigInteger('semestres_idsemestres');
            $table->unsignedBigInteger('grupos_idgrupos');
            $table->unsignedBigInteger('especialidades_idespecialidades');

            $table->foreign('alumnos_idalumnos')->references('idalumnos')->on('alumnos');
            $table->foreign('carrera_idcarrera')->references('idcarrera')->on('carrera');
            $table->foreign('semestres_idsemestres')->references('idsemestres')->on('semestres');
            $table->foreign('grupos_idgrupos')->references('idgrupos')->on('grupos');
            $table->foreign('especialidades_idespecialidades')->references('idespecialidades')->on('especialidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones_alumnos');
    }
};
