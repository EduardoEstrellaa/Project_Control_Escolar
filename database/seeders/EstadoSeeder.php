<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado')->insert([
            ['estado_nombre' => 'Activo', 'estado_valor' => 1],
            ['estado_nombre' => 'Inactivo', 'estado_valor' => 2],
            ['estado_nombre' => 'Pendiente', 'estado_valor' => 3],
        ]);
    }
}
