<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Mostra lista di tutti gli articoli pubblicati
     */
    public function index()
    {
        // Stile scelto: tech ma elegante
        return view('blog.index-tech');
    }

    /**
     * Mostra singolo articolo del blog
     */
    public function show(string $slug)
    {
        // Fallback a pagine statiche
        $staticMap = [
            'ux-design' => 'ux-design',
            'react-2026' => 'react-2026',
            'bootstrap-vs-tailwind' => 'bootstrap-vs-tailwind',
            // compatibilità con vecchi slug
            'ux-design-2026' => 'ux-design',
            'laravel-13-guide' => 'react-2026',
            'react-2026-evolution' => 'bootstrap-vs-tailwind',
        ];

        if (isset($staticMap[$slug])) {
            return view('pages.blog.' . $staticMap[$slug]);
        }

        abort(404);
    }

    // Metodi non utilizzati per frontend pubblico (solo admin)
    public function create() { abort(404); }
    public function store(Request $request) { abort(404); }
    public function edit(string $id) { abort(404); }
    public function update(Request $request, string $id) { abort(404); }
    public function destroy(string $id) { abort(404); }
}
