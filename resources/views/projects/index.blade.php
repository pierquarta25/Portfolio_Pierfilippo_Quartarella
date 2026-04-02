<x-layouts.app>

    {{-- Header tech elegante --}}
    <header class="page-header works-hero">
        <div class="container">
            <p class="works-hero__eyebrow">My Works</p>
            <h1 class="fw-bold mb-3 works-hero__title" style="font-size: clamp(2rem, 5vw, 3.5rem);">
                {{ __('projects.page.title') }}
            </h1>
            <p class="lead mb-0 works-hero__subtitle">{{ __('projects.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Lista progetti --}}
    <section class="section works-grid">
        <div class="container">
            <div class="row g-4">
                @forelse($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <article class="project-card work-card">
                        @if($project->featured_image)
                        <div class="work-card__media">
                            <img src="{{ asset($project->featured_image) }}" alt="{{ $project->title }}" class="card-media">
                        </div>
                        @endif

                        <div class="work-card__body">
                            <h2 class="h5 fw-bold mb-2">
                                <a href="{{ route('projects.show', $project->slug) }}" class="work-link">
                                    {{ $project->title }}
                                </a>
                            </h2>

                            <p class="text-muted mb-3">{{ $project->description }}</p>

                            <a href="{{ route('projects.show', $project->slug) }}" class="btn btn-outline-primary btn-sm">
                                {{ __('project.view') }}
                            </a>
                        </div>
                    </article>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">{{ __('projects.none') }}</p>
                </div>
                @endforelse
            </div>

            @if($projects->hasPages())
            <div class="mt-5">
                {{ $projects->links() }}
            </div>
            @endif
        </div>
    </section>

</x-layouts.app>
