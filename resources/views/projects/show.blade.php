<x-layouts.app>
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-8" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">{{ __('nav.home') }}</a></li>
            <li>/</li>
            <li><a href="{{ route('projects.index') }}" class="hover:text-blue-600">{{ __('nav.projects') }}</a></li>
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
                    {{ $project->status === 'published' ? __('projects.status.published') : __('projects.status.in_progress') }}
                </span>
                @if($project->completed_at)
                <time class="text-sm text-gray-500 dark:text-gray-400">
                    {{ __('projects.label.completed_at') }} {{ $project->completed_at->locale('it')->isoFormat('MMMM YYYY') }}
                </time>
                @endif
                @if($project->client_name)
                <span class="text-sm text-gray-500 dark:text-gray-400">
                    {{ __('projects.label.client') }} {{ $project->client_name }}
                </span>
                @endif
            </div>

            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                {{ $project->title }}
            </h1>

            <p class="text-xl text-gray-600 dark:text-gray-300 mb-6">
                {{ $project->description }}
            </p>

            <!-- Pulsante azione (coerente con home) -->
            @if($project->url)
            <div class="mb-8">
                <a href="{{ $project->url }}"
                   target="_blank"
                   class="btn btn-outline-primary btn-sm">
                    {{ __('project.view') }}
                </a>
            </div>
            @endif
        </header>

        <!-- Immagine principale -->
        @if($project->featured_image)
        <div class="mb-8">
            <img src="{{ asset($project->featured_image) }}"
                 alt="{{ $project->title }}"
                 class="hero-media rounded-lg shadow-lg">
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
                    {{ __('projects.footer.prefix') }} {{ $project->status === 'published' ? __('projects.status.completed_lower') : __('projects.status.in_progress_lower') }}
                    @if($project->completed_at)
                    {{ __('projects.footer.on') }} {{ $project->completed_at->locale('it')->isoFormat('D MMMM YYYY') }}
                    @endif
                </div>

                <a href="{{ route('projects.index') }}"
                   class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">
                    ← {{ __('projects.btn.back') }}
                </a>
            </div>
        </footer>
    </article>

    <!-- Progetti correlati -->
    @if($relatedProjects->count() > 0)
    <section class="max-w-6xl mx-auto mt-16">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">
            {{ __('projects.related') }}
        </h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($relatedProjects as $relatedProject)
            <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                @if($relatedProject->featured_image)
                <img src="{{ asset($relatedProject->featured_image) }}"
                     alt="{{ $relatedProject->title }}"
                     class="card-media card-media--sm">
                @endif

                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-2">
                        <a href="{{ route('projects.show', $relatedProject->slug) }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
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
</x-layouts.app>
