@extends('layouts.app')

@section('title', 'Progetti - ' . config('app.name'))

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
            I Miei Progetti
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
            Una selezione dei progetti più significativi sviluppati durante il mio percorso professionale.
        </p>
    </div>

    <!-- Lista progetti -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse($projects as $project)
        <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow group">
            @if($project->featured_image)
            <div class="relative overflow-hidden">
                <img src="{{ asset('storage/' . $project->featured_image) }}"
                     alt="{{ $project->title }}"
                     class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300"></div>
            </div>
            @endif

            <div class="p-6">
                <div class="flex items-center justify-between mb-3">
                    <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-sm rounded-full">
                        {{ $project->status === 'published' ? 'Completato' : 'In Sviluppo' }}
                    </span>
                    @if($project->completed_at)
                    <time class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $project->completed_at->format('M Y') }}
                    </time>
                    @endif
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                    <a href="{{ $project->url }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        {{ $project->title }}
                    </a>
                </h2>

                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    {{ $project->description }}
                </p>

                <div class="flex items-center justify-between">
                    <div class="flex gap-2">
                        @if($project->url)
                        <a href="{{ $project->url }}"
                           target="_blank"
                           class="inline-flex items-center px-3 py-2 bg-blue-500 text-white text-sm rounded-lg hover:bg-blue-600 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            Demo
                        </a>
                        @endif

                        @if($project->github_url)
                        <a href="{{ $project->github_url }}"
                           target="_blank"
                           class="inline-flex items-center px-3 py-2 bg-gray-800 text-white text-sm rounded-lg hover:bg-gray-900 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                            Codice
                        </a>
                        @endif
                    </div>

                    <a href="{{ $project->url }}"
                       class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium text-sm">
                        Dettagli →
                    </a>
                </div>
            </div>
        </article>
        @empty
        <div class="col-span-full text-center py-12">
            <p class="text-gray-500 dark:text-gray-400 text-lg">
                Nessun progetto trovato.
            </p>
        </div>
        @endforelse
    </div>

    <!-- Paginazione -->
    @if($projects->hasPages())
    <div class="mt-12">
        {{ $projects->links() }}
    </div>
    @endif
</div>
@endsection