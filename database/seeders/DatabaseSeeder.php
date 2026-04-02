<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crea utente amministratore
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@portfolio.com',
            'is_admin' => true, // Flag amministratore
        ]);

        // Crea utente normale per test
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Esegui tutti i seeder
        $this->call([
            CategorySeeder::class,
            BlogSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
