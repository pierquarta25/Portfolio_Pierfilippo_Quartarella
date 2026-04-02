<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crea utente amministratore se non esiste
        $adminExists = DB::table('users')->where('email', 'admin@example.com')->exists();
        if (!$adminExists) {
            User::factory()->create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'is_admin' => true, // Flag amministratore
            ]);
        }

        // Crea utente normale per test se non esiste
        $testExists = DB::table('users')->where('email', 'test@example.com')->exists();
        if (!$testExists) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        // Esegui tutti i seeder
        $this->call([
            CategorySeeder::class,
            BlogSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
