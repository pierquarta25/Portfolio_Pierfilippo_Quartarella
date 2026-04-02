<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes; // Abilita factory e eliminazione logica

    // Campi che possono essere riempiti in massa
    protected $fillable = [
        'slug',
        'title',
        'description',
        'content',
        'featured_image',
        'client_name',
        'completed_at',
        'url',
        'github_url',
        'status',
    ];

    // Cast per date
    protected $casts = [
        'completed_at' => 'date',
    ];

    // Scope per progetti pubblicati
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    // Scope per progetti in bozza
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    // Metodo per ottenere l'URL del progetto
    public function getUrlAttribute(): string
    {
        return route('projects.show', $this->slug);
    }

    // Metodo per verificare se il progetto è pubblicato
    public function isPublished(): bool
    {
        return $this->status === 'published';
    }
}
