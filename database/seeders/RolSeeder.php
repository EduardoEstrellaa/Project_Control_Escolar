<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rol')->insert([
            ['rol_nombre' => 'SuperUsuario', 'rol_valor' => 1],
            ['rol_nombre' => 'Administrador', 'rol_valor' => 2],
            ['rol_nombre' => 'Docente', 'rol_valor' => 3],
            ['rol_nombre' => 'Alumno', 'rol_valor' => 4],
            ['rol_nombre' => 'Invitado', 'rol_valor' => 5],
        ]);
    }
}
