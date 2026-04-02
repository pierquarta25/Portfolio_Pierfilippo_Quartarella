<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Mostra lista di tutti i progetti pubblicati
     */
    public function index()
    {
        // Recupera progetti pubblicati con paginazione
        $projects = Project::published()
                          ->orderBy('completed_at', 'desc')
                          ->paginate(12);

        return view('projects.index', compact('projects'));
    }

    /**
     * Mostra singolo progetto
     */
    public function show(string $slug)
    {
        // Se esiste una pagina statica per il progetto, usala come fallback
        $staticMap = [
            'techzone-ecommerce' => 'techzone',
            'arte-gallery' => 'art',
            'project-red' => 'red',
        ];

        $staticView = $staticMap[$slug] ?? $slug;
        $staticPath = "pages.projects.{$staticView}";

        // Trova progetto per slug su DB, altrimenti tenta la pagina statica
        $project = Project::published()
                         ->where('slug', $slug)
                         ->first();

        if (!$project && view()->exists($staticPath)) {
            return view($staticPath);
        }

        if (!$project) {
            abort(404);
        }

        // Progetti correlati (esclusi quello corrente)
        $relatedProjects = Project::published()
                                 ->where('id', '!=', $project->id)
                                 ->orderBy('completed_at', 'desc')
                                 ->take(3)
                                 ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }

    // Metodi non utilizzati per frontend pubblico (solo admin)
    public function create() { abort(404); }
    public function store(Request $request) { abort(404); }
    public function edit(string $id) { abort(404); }
    public function update(Request $request, string $id) { abort(404); }
    public function destroy(string $id) { abort(404); }
}
