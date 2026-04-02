<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'UX/UI Design',
                'slug' => 'ux-ui-design',
                'description' => 'Articoli su design dell\'esperienza utente e interfaccia utente',
            ],
            [
                'name' => 'Sviluppo Web',
                'slug' => 'sviluppo-web',
                'description' => 'Guide e tutorial sullo sviluppo web moderno',
            ],
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Tutorial e best practices per il framework Laravel',
            ],
            [
                'name' => 'JavaScript',
                'slug' => 'javascript',
                'description' => 'Articoli su JavaScript, React, Vue.js e tecnologie frontend',
            ],
            [
                'name' => 'Database',
                'slug' => 'database',
                'description' => 'Guide su database design, ottimizzazioni e best practices',
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
