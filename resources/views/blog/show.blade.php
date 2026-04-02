@extends('layouts.app')

@section('title', $blog->title . ' - Blog')

@section('meta')
<meta name="description" content="{{ $blog->excerpt }}">
<meta property="og:title" content="{{ $blog->title }}">
<meta property="og:description" content="{{ $blog->excerpt }}">
@if($blog->featured_image)
<meta property="og:image" content="{{ asset('storage/' . $blog->featured_image) }}">
@endif
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-8" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li><a href="{{ route('blog.index') }}" class="hover:text-blue-600">Blog</a></li>
            <li>/</li>
            <li class="text-gray-900 dark:text-white">{{ $blog->title }}</li>
        </ol>
    </nav>

    <!-- Articolo principale -->
    <article class="max-w-4xl mx-auto">
        <!-- Header articolo -->
        <header class="mb-8">
            <div class="flex items-center gap-2 mb-4">
                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-sm rounded-full">
                    {{ $blog->category->name }}
                </span>
                <time class="text-sm text-gray-500 dark:text-gray-400">
                    Pubblicato il {{ $blog->published_at->locale('it')->isoFormat('D MMMM YYYY') }}
                </time>
            </div>

            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ $blog->title }}
            </h1>

            <p class="text-xl text-gray-600 dark:text-gray-300">
                {{ $blog->excerpt }}
            </p>
        </header>

        <!-- Immagine principale -->
        @if($blog->featured_image)
        <div class="mb-8">
            <img src="{{ asset('storage/' . $blog->featured_image) }}"
                 alt="{{ $blog->title }}"
                 class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
        </div>
        @endif

        <!-- Contenuto articolo -->
        <div class="prose prose-lg dark:prose-invert max-w-none mb-12">
            {!! $blog->content !!}
        </div>

        <!-- Footer articolo -->
        <footer class="border-t border-gray-200 dark:border-gray-700 pt-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        Categoria:
                    </span>
                    <a href="{{ route('blog.index', ['category' => $blog->category->slug]) }}"
                       class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                        {{ $blog->category->name }}
                    </a>
                </div>

                <div class="flex gap-2">
                    <!-- Condividi su Twitter -->
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode($blog->url) }}"
                       target="_blank"
                       class="p-2 text-gray-400 hover:text-blue-500 transition-colors"
                       aria-label="Condividi su Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>

                    <!-- Condividi su LinkedIn -->
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($blog->url) }}"
                       target="_blank"
                       class="p-2 text-gray-400 hover:text-blue-700 transition-colors"
                       aria-label="Condividi su LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </article>

    <!-- Articoli correlati -->
    @if($relatedBlogs->count() > 0)
    <section class="max-w-6xl mx-auto mt-16">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">
            Articoli Correlati
        </h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($relatedBlogs as $relatedBlog)
            <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                @if($relatedBlog->featured_image)
                <img src="{{ asset('storage/' . $relatedBlog->featured_image) }}"
                     alt="{{ $relatedBlog->title }}"
                     class="w-full h-32 object-cover">
                @endif

                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">
                        <a href="{{ $relatedBlog->url }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            {{ $relatedBlog->title }}
                        </a>
                    </h3>

                    <time class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $relatedBlog->published_at->locale('it')->isoFormat('D MMMM YYYY') }}
                    </time>
                </div>
            </article>
            @endforeach
        </div>
    </section>
    @endif
</div>
@endsection