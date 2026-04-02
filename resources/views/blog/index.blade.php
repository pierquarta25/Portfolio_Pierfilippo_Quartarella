@extends('layouts.app')

@section('title', 'Blog - ' . config('app.name'))

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
            Il Mio Blog Tecnologico
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
            Articoli, tutorial e riflessioni sul mondo dello sviluppo web e del design digitale.
        </p>
    </div>

    <!-- Filtri per categoria -->
    <div class="flex flex-wrap justify-center gap-4 mb-8">
        <a href="{{ route('blog.index') }}"
           class="px-4 py-2 rounded-full {{ !request('category') ? 'bg-blue-500 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300' }} hover:bg-blue-600 transition-colors">
            Tutti gli articoli
        </a>
        @foreach($categories as $category)
        <a href="{{ route('blog.index', ['category' => $category->slug]) }}"
           class="px-4 py-2 rounded-full {{ request('category') === $category->slug ? 'bg-blue-500 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300' }} hover:bg-blue-600 transition-colors">
            {{ $category->name }} ({{ $category->published_blogs_count }})
        </a>
        @endforeach
    </div>

    <!-- Lista articoli -->
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse($blogs as $blog)
        <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            @if($blog->featured_image)
            <img src="{{ asset('storage/' . $blog->featured_image) }}"
                 alt="{{ $blog->title }}"
                 class="w-full h-48 object-cover">
            @endif

            <div class="p-6">
                <div class="flex items-center gap-2 mb-3">
                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">
                        {{ $blog->category->name }}
                    </span>
                    <time class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $blog->published_at->locale('it')->isoFormat('D MMMM YYYY') }}
                    </time>
                </div>

                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                    <a href="{{ $blog->url }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        {{ $blog->title }}
                    </a>
                </h2>

                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    {{ $blog->excerpt }}
                </p>

                <a href="{{ $blog->url }}"
                   class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">
                    Leggi di più
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </article>
        @empty
        <div class="col-span-full text-center py-12">
            <p class="text-gray-500 dark:text-gray-400 text-lg">
                Nessun articolo trovato in questa categoria.
            </p>
        </div>
        @endforelse
    </div>

    <!-- Paginazione -->
    @if($blogs->hasPages())
    <div class="mt-12">
        {{ $blogs->links() }}
    </div>
    @endif
</div>
@endsection