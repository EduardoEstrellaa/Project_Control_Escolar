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
        Schema::create('perfil', function (Blueprint $table) {
            $table->integer('idperfil')->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->dateTime('fecha_nacimiento');
            $table->unsignedBigInteger('users_id');
            $table->integer('generos_idgeneros');
            $table->timestamps();

            // Índices
            $table->index('users_id');
            $table->index('generos_idgeneros');

            // Llaves foráneas
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('generos_idgeneros')->references('idgeneros')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil');
    }
};
