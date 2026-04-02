@extends('layouts.app')

@section('title', $project->title . ' - Progetti')

@section('meta')
<meta name="description" content="{{ $project->description }}">
<meta property="og:title" content="{{ $project->title }}">
<meta property="og:description" content="{{ $project->description }}">
@if($project->featured_image)
<meta property="og:image" content="{{ asset('storage/' . $project->featured_image) }}">
@endif
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-8" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li><a href="{{ route('projects.index') }}" class="hover:text-blue-600">Progetti</a></li>
            <li>/</li>
            <li class="text-gray-900 dark:text-white">{{ $project->title }}</li>
        </ol>
    </nav>

    <!-- Progetto principale -->
    <article class="max-w-4xl mx-auto">
        <!-- Header progetto -->
        <header class="mb-8">
            <div class="flex items-center gap-4 mb-4">
                <span class="px-3 py-1 {{ $project->status === 'published' ? 'bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200' : 'bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200' }} text-sm rounded-full">
                    {{ $project->status === 'published' ? 'Completato' : 'In Sviluppo' }}
                </span>
                @if($project->completed_at)
                <time class="text-sm text-gray-500 dark:text-gray-400">
                    Completato: {{ $project->completed_at->locale('it')->isoFormat('MMMM YYYY') }}
                </time>
                @endif
                @if($project->client_name)
                <span class="text-sm text-gray-500 dark:text-gray-400">
                    Cliente: {{ $project->client_name }}
                </span>
                @endif
            </div>

            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ $project->title }}
            </h1>

            <p class="text-xl text-gray-600 dark:text-gray-300 mb-6">
                {{ $project->description }}
            </p>

            <!-- Pulsanti azione -->
            <div class="flex gap-4 mb-8">
                @if($project->url)
                <a href="{{ $project->url }}"
                   target="_blank"
                   class="inline-flex items-center px-6 py-3 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    Vedi Demo
                </a>
                @endif

                @if($project->github_url)
                <a href="{{ $project->github_url }}"
                   target="_blank"
                   class="inline-flex items-center px-6 py-3 bg-gray-800 text-white font-medium rounded-lg hover:bg-gray-900 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    Codice Sorgente
                </a>
                @endif
            </div>
        </header>

        <!-- Immagine principale -->
        @if($project->featured_image)
        <div class="mb-8">
            <img src="{{ asset('storage/' . $project->featured_image) }}"
                 alt="{{ $project->title }}"
                 class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
        </div>
        @endif

        <!-- Contenuto progetto -->
        <div class="prose prose-lg dark:prose-invert max-w-none mb-12">
            {!! $project->content !!}
        </div>

        <!-- Footer progetto -->
        <footer class="border-t border-gray-200 dark:border-gray-700 pt-8">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    Progetto {{ $project->status === 'published' ? 'completato' : 'in sviluppo' }}
                    @if($project->completed_at)
                    il {{ $project->completed_at->locale('it')->isoFormat('D MMMM YYYY') }}
                    @endif
                </div>

                <a href="{{ route('projects.index') }}"
                   class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">
                    ← Torna ai progetti
                </a>
            </div>
        </footer>
    </article>

    <!-- Progetti correlati -->
    @if($relatedProjects->count() > 0)
    <section class="max-w-6xl mx-auto mt-16">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">
            Altri Progetti
        </h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($relatedProjects as $relatedProject)
            <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                @if($relatedProject->featured_image)
                <img src="{{ asset('storage/' . $relatedProject->featured_image) }}"
                     alt="{{ $relatedProject->title }}"
                     class="w-full h-32 object-cover">
                @endif

                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">
                        <a href="{{ $relatedProject->url }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            {{ $relatedProject->title }}
                        </a>
                    </h3>

                    <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                        {{ $relatedProject->description }}
                    </p>

                    @if($relatedProject->completed_at)
                    <time class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $relatedProject->completed_at->format('M Y') }}
                    </time>
                    @endif
                </div>
            </article>
            @endforeach
        </div>
    </section>
    @endif
</div>
@endsection