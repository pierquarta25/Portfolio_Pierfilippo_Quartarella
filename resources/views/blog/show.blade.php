<x-layouts.app>
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-8" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">{{ __('nav.home') }}</a></li>
            <li>/</li>
            <li><a href="{{ route('blog.index') }}" class="hover:text-blue-600">{{ __('nav.blog') }}</a></li>
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
                    {{ __('blog.published_on') }} {{ $blog->published_at->locale('it')->isoFormat('D MMMM YYYY') }}
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
        <div class="mb-8">
            @if($blog->featured_image)
            <img src="{{ asset('storage/' . $blog->featured_image) }}"
                 alt="{{ $blog->title }}"
                 class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
            @else
            <div class="blog-placeholder blog-placeholder--hero h-64 md:h-96 rounded-lg shadow-lg">
                <div class="blog-placeholder__badge">{{ $blog->category->name }}</div>
                <div class="blog-placeholder__title">{{ $blog->title }}</div>
            </div>
            @endif
        </div>

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

                <a href="{{ route('blog.index') }}"
                   class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">
                    {{ __('blog.read') }}
                </a>
            </div>
        </footer>
    </article>

    <!-- Articoli correlati -->
    @if($relatedBlogs->count() > 0)
    <section class="max-w-6xl mx-auto mt-16">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">
            {{ __('blog.related') }}
        </h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($relatedBlogs as $relatedBlog)
            <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                @if($relatedBlog->featured_image)
                <img src="{{ asset('storage/' . $relatedBlog->featured_image) }}"
                     alt="{{ $relatedBlog->title }}"
                     class="w-full h-32 object-cover">
                @else
                <div class="blog-placeholder h-32">
                    <div class="blog-placeholder__badge">{{ $relatedBlog->category->name }}</div>
                    <div class="blog-placeholder__title">{{ $relatedBlog->title }}</div>
                </div>
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
</x-layouts.app>
