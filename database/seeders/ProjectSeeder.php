<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'slug' => 'techzone-ecommerce',
                'title' => 'TechZone - Piattaforma E-commerce',
                'description' => 'Piattaforma completa di e-commerce per prodotti tecnologici con gestione inventario e pagamenti integrati.',
                'content' => '<p>TechZone è una piattaforma e-commerce completa sviluppata con Laravel e Vue.js.</p><h2>Caratteristiche Principali</h2><ul><li>Gestione prodotti e categorie</li><li>Carrello acquisti</li><li>Integrazione pagamenti Stripe</li><li>Pannello amministratore</li></ul><h2>Tecnologie Utilizzate</h2><p>Laravel, Vue.js, MySQL, Stripe API</p>',
                'client_name' => 'TechCorp SRL',
                'completed_at' => now()->subMonths(3),
                'url' => 'https://techzone-demo.com',
                'github_url' => 'https://github.com/pierquarta25/techzone',
                'featured_image' => 'media/TechZone.png',
                'status' => 'published',
            ],
            [
                'slug' => 'arte-gallery',
                'title' => 'Arte Gallery - Portfolio Artistico',
                'description' => 'Sito portfolio per artista digitale con galleria interattiva e sistema di commissioni online.',
                'content' => '<p>Un portfolio artistico moderno con galleria interattiva.</p><h2>Features</h2><ul><li>Galleria immagini con lightbox</li><li>Sistema di commissioni</li><li>Blog integrato</li><li>Design responsive</li></ul><h2>Tecnologie</h2><p>Next.js, Tailwind CSS, Contentful CMS</p>',
                'client_name' => 'Maria Rossi (Artista)',
                'completed_at' => now()->subMonths(2),
                'url' => 'https://arte-gallery.com',
                'github_url' => 'https://github.com/pierquarta25/arte-gallery',
                'featured_image' => 'media/Sito_d_arte.png',
                'status' => 'published',
            ],
            [
                'slug' => 'project-red',
                'title' => 'Project Red - App Mobile',
                'description' => 'Applicazione mobile per gestione progetti con sincronizzazione cloud e collaborazione in tempo reale.',
                'content' => '<p>App mobile innovativa per la gestione di progetti.</p><h2>Funzionalità</h2><ul><li>Gestione task e progetti</li><li>Collaborazione real-time</li><li>Sincronizzazione cloud</li><li>Notifiche push</li></ul><h2>Stack Tecnologico</h2><p>React Native, Node.js, MongoDB, Socket.io</p>',
                'client_name' => 'RedTech Solutions',
                'completed_at' => now()->subMonths(1),
                'url' => 'https://project-red.app',
                'github_url' => 'https://github.com/pierquarta25/project-red',
                'featured_image' => 'media/progettoRED.png',
                'status' => 'published',
            ],
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}
