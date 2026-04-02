<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'slug' => 'ux-design-2026',
                'title' => 'UX Design nel 2026: Tendenze e Best Practices',
                'excerpt' => 'Esploriamo le principali tendenze del design UX per il 2026 e come applicarle nei progetti moderni.',
                'content' => '<p>Il design dell\'esperienza utente continua ad evolversi rapidamente. Nel 2026, vediamo emergere nuove tendenze che ridefiniscono come interagiamo con le interfacce digitali.</p><h2>Intelligenza Artificiale nel Design</h2><p>L\'AI sta rivoluzionando il processo di design, aiutando designer a creare esperienze più personalizzate e intuitive.</p><h2>Design Inclusivo</h2><p>L\'accessibilità non è più un optional, ma un requisito fondamentale per ogni progetto digitale.</p>',
                'category_id' => 1, // UX/UI Design
                'published' => true,
                'published_at' => now()->subDays(30),
            ],
            [
                'slug' => 'laravel-13-guide',
                'title' => 'Guida Completa a Laravel 13',
                'excerpt' => 'Tutorial completo per iniziare con Laravel 13, il framework PHP più popolare per lo sviluppo web.',
                'content' => '<p>Laravel 13 introduce molte nuove funzionalità che rendono lo sviluppo ancora più efficiente.</p><h2>Nuove Features</h2><p>Scopriamo le novità principali di questa versione.</p><h2>Migrazione da Versioni Precedenti</h2><p>Come aggiornare i tuoi progetti esistenti a Laravel 13.</p>',
                'category_id' => 3, // Laravel
                'published' => true,
                'published_at' => now()->subDays(15),
            ],
            [
                'slug' => 'react-2026-evolution',
                'title' => 'L\'Evoluzione di React nel 2026',
                'excerpt' => 'Analisi delle nuove funzionalità di React e come stanno cambiando lo sviluppo frontend.',
                'content' => '<p>React continua ad innovare, introducendo nuove API e pattern di sviluppo.</p><h2>Concurrent Features</h2><p>Le nuove funzionalità concorrenti migliorano le performance delle applicazioni.</p><h2>Server Components</h2><p>Come i Server Components stanno cambiando l\'architettura delle app React.</p>',
                'category_id' => 4, // JavaScript
                'published' => true,
                'published_at' => now()->subDays(7),
            ],
        ];

        foreach ($blogs as $blog) {
            \App\Models\Blog::create($blog);
        }
    }
}
