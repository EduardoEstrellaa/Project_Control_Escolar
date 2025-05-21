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
        Schema::create('calificaciones_por_tema', function (Blueprint $table) {
            $table->unsignedBigInteger('idcalificaciones_por_tema')->primary();
            $table->unsignedBigInteger('asignaturas_alumnos_idasignaturas_alumnos');
            $table->unsignedBigInteger('temas_asignaturas_idtemas_asignaturas');
            $table->decimal('calificacion_tema', 5, 2);

            $table->foreign('asignaturas_alumnos_idasignaturas_alumnos', 'fk_calitema_asigalum')
                ->references('idasignaturas_alumnos')
                ->on('asignaturas_alumnos');

            $table->foreign('temas_asignaturas_idtemas_asignaturas', 'fk_calitema_tema')
                ->references('idtemas_asignaturas')
                ->on('temas_asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones_por_tema');
    }
};
