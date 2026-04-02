<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Mostra lista di tutti gli articoli pubblicati
     */
    public function index()
    {
        // Recupera articoli pubblicati con paginazione
        $blogs = Blog::with('category')
                    ->published()
                    ->orderBy('published_at', 'desc')
                    ->paginate(10);

        // Recupera categorie per filtro
        $categories = Category::withCount('blogs')->get();

        return view('blog.index', compact('blogs', 'categories'));
    }

    /**
     * Mostra singolo articolo del blog
     */
    public function show(string $slug)
    {
        // Trova articolo per slug
        $blog = Blog::with('category')
                   ->where('slug', $slug)
                   ->published()
                   ->firstOrFail();

        // Articoli correlati (stessa categoria, escluso quello corrente)
        $relatedBlogs = Blog::with('category')
                           ->where('category_id', $blog->category_id)
                           ->where('id', '!=', $blog->id)
                           ->published()
                           ->orderBy('published_at', 'desc')
                           ->take(3)
                           ->get();

        return view('blog.show', compact('blog', 'relatedBlogs'));
    }

    // Metodi non utilizzati per frontend pubblico (solo admin)
    public function create() { abort(404); }
    public function store(Request $request) { abort(404); }
    public function edit(string $id) { abort(404); }
    public function update(Request $request, string $id) { abort(404); }
    public function destroy(string $id) { abort(404); }
}
