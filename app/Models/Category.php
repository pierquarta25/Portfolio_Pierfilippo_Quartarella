<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // Campi che possono essere riempiti in massa
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    // Relazione con Blog (una categoria ha molti articoli)
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    // Metodo per ottenere l'URL della categoria
    public function getUrlAttribute(): string
    {
        return route('blog.category', $this->slug);
    }

    // Metodo per contare articoli pubblicati
    public function getPublishedBlogsCountAttribute(): int
    {
        return $this->blogs()->published()->count();
    }
}
