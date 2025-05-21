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
        Schema::create('docentes', function (Blueprint $table) {
            $table->integer('iddocentes')->primary();
            $table->string('numero_control', 10);
            $table->unsignedBigInteger('perfil_idperfil');
            $table->timestamps();

            $table->foreign('perfil_idperfil')
                ->references('idperfil')
                ->on('perfil')
                ->onUpdate('no action')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
