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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index(); // URL amichevole unica
            $table->string('title'); // Titolo del progetto
            $table->text('description'); // Descrizione breve
            $table->longText('content'); // Contenuto dettagliato
            $table->string('featured_image')->nullable(); // Immagine principale
            $table->string('client_name')->nullable(); // Nome cliente
            $table->date('completed_at')->nullable(); // Data completamento
            $table->string('url')->nullable(); // Link al progetto live
            $table->string('github_url')->nullable(); // Link repository GitHub
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Stato progetto
            $table->timestamps(); // created_at, updated_at
            $table->softDeletes(); // Eliminazione logica
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
