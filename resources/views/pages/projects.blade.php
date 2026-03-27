<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('projects.page.title') }}</h1>
            <p class="lead text-muted mb-0">{{ __('projects.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Griglia progetti --}}
    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/TechZone.png') }}" alt="TechZone">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">{{ __('project.techzone.title') }}</h3>
                            <p class="text-muted mb-3">{{ __('project.techzone.desc') }}</p>
                            <div class="project-tags">
                                <span>UI</span><span>Bootstrap</span><span>JS</span>
                            </div>
                            <a href="{{ route('projects.techzone') }}" class="btn btn-outline-primary btn-sm mt-3">{{ __('project.view') }}</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/Sito_d\'arte.png') }}" alt="Sito d'arte">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">{{ __('project.art.title') }}</h3>
                            <p class="text-muted mb-3">{{ __('project.art.desc') }}</p>
                            <div class="project-tags">
                                <span>Design</span><span>UX</span><span>Brand</span>
                            </div>
                            <a href="{{ route('projects.art') }}" class="btn btn-outline-primary btn-sm mt-3">{{ __('project.view') }}</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/progettoRED.png') }}" alt="Progetto RED">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">{{ __('project.red.title') }}</h3>
                            <p class="text-muted mb-3">{{ __('project.red.desc') }}</p>
                            <div class="project-tags">
                                <span>Landing</span><span>CSS</span><span>UX</span>
                            </div>
                            <a href="{{ route('projects.red') }}" class="btn btn-outline-primary btn-sm mt-3">{{ __('project.view') }}</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
