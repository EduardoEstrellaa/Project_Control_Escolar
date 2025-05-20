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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_idrol');
            $table->unsignedBigInteger('estado_idestado');
            $table->unsignedBigInteger('tipo_usuario_idtipo_usuario');

            $table->foreign('rol_idrol')->references('idrol')->on('rol');
            $table->foreign('estado_idestado')->references('idestado')->on('estado');
            $table->foreign('tipo_usuario_idtipo_usuario')->references('idtipo_usuario')->on('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['rol_idrol']);
            $table->dropForeign(['estado_idestado']);
            $table->dropForeign(['tipo_usuario_idtipo_usuario']);

            $table->dropColumn(['rol_idrol', 'estado_idestado', 'tipo_usuario_idtipo_usuario']);
        });
    }
};
