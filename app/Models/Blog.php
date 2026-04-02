<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes; // Abilita eliminazione logica

    // Campi che possono essere riempiti in massa
    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'content',
        'featured_image',
        'category_id',
        'published',
        'published_at',
    ];

    // Campi che dovrebbero essere trattati come date
    protected $dates = [
        'published_at',
    ];

    // Relazione con Category
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Scope per articoli pubblicati
    public function scopePublished($query)
    {
        return $query->where('published', true)
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now());
    }

    // Scope per articoli in bozza
    public function scopeDraft($query)
    {
        return $query->where('published', false);
    }

    // Metodo per ottenere l'URL dell'articolo
    public function getUrlAttribute(): string
    {
        return route('blog.show', $this->slug);
    }
}
