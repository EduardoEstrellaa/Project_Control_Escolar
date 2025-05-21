<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_usuario')->insert([
            ['tipo_usuario_nombre' => 'Interno', 'tipo_usuario_valor' => 1],
            ['tipo_usuario_nombre' => 'Externo', 'tipo_usuario_valor' => 2],
        ]);
    }
}
