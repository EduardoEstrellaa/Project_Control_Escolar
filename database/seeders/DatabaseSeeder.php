<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importar los seeders nuevos
use Database\Seeders\EstadoSeeder;
use Database\Seeders\RolSeeder;
use Database\Seeders\TipoUsuarioSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Ejecutar los seeders personalizados
        $this->call([
            EstadoSeeder::class,
            RolSeeder::class,
            TipoUsuarioSeeder::class,
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
