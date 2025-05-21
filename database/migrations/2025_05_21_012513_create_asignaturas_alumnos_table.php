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
        Schema::create('asignaturas_alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('idasignaturas_alumnos')->primary();
            $table->unsignedBigInteger('inscripciones_alumnos_idinscripciones_alumnos');
            $table->unsignedBigInteger('asignaturas_idasignaturas');
            $table->integer('calificacion_general')->nullable();

            $table->foreign('inscripciones_alumnos_idinscripciones_alumnos', 'fk_asigalum_inscrip')
                ->references('idinscripciones_alumnos')
                ->on('inscripciones_alumnos');

            $table->foreign('asignaturas_idasignaturas', 'fk_asigalum_asig')
                ->references('idasignaturas')
                ->on('asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaturas_alumnos');
    }
};
