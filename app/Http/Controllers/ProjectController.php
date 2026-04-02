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
        // Trova progetto per slug
        $project = Project::where('slug', $slug)
                         ->published()
                         ->firstOrFail();

        // Progetti correlati (esclusi quello corrente)
        $relatedProjects = Project::where('id', '!=', $project->id)
                                 ->published()
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
