<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index(); // URL amichevole unica
            $table->string('title'); // Titolo dell'articolo
            $table->text('excerpt'); // Riassunto breve
            $table->longText('content'); // Contenuto completo
            $table->string('featured_image')->nullable(); // Immagine principale
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); // Relazione con categorie
            $table->boolean('published')->default(false); // Stato pubblicazione
            $table->dateTime('published_at')->nullable()->index(); // Data pubblicazione
            $table->timestamps(); // created_at, updated_at
            $table->softDeletes(); // Eliminazione logica
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
