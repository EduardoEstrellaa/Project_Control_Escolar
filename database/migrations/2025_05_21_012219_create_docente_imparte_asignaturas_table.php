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
        Schema::create('docente_imparte_asignaturas', function (Blueprint $table) {
            $table->unsignedBigInteger('iddocente_imparte_asignaturas')->primary();
            $table->unsignedBigInteger('docentes_iddocentes');
            $table->unsignedBigInteger('asignatura_idasignatura');
            $table->unsignedBigInteger('grupos_idgrupos');

            // Claves foráneas con nombres personalizados (opcional pero recomendable)
            $table->foreign('docentes_iddocentes', 'fk_dia_docente')
                ->references('iddocentes')->on('docentes');

            $table->foreign('asignatura_idasignatura', 'fk_dia_asignatura')
                ->references('idasignaturas')->on('asignaturas');

            $table->foreign('grupos_idgrupos', 'fk_dia_grupo')
                ->references('idgrupos')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente_imparte_asignaturas');
    }
};
