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
        Schema::create('telefono_perfil', function (Blueprint $table) {
            $table->integer('idtelefono_perfil')->primary();
            $table->unsignedBigInteger('perfil_idperfil');
            $table->string('numero_telefonico', 15);
            $table->timestamps();

            // Índice y llave foránea
            $table->index('perfil_idperfil');
            $table->foreign('perfil_idperfil')->references('idperfil')->on('perfil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefono_perfil');
    }
};
