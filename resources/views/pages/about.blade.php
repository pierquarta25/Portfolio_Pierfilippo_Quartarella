<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('about.page.title') }}</h1>
            <p class="lead text-muted mb-0">{{ __('about.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Intro / Storia --}}
    <section class="section about-hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 hidden text-center">
                    <div class="about-portrait">
                        <img src="{{ asset('media/foto_mia.jpg') }}" alt="Pierfilippo Quartarella" class="img-fluid rounded-circle shadow-lg border border-5 border-white">
                    </div>
                </div>
                <div class="col-lg-7 hidden">
                    <div class="about-intro">
                        <p class="about-kicker">{{ __('about.quick.kicker') }}</p>
                        <h2 class="fw-bold mb-3">{{ __('about.quick.title') }}</h2>
                        <p class="text-muted mb-4">{{ __('about.quick.subtitle') }}</p>

                        <div class="about-badges mb-4">
                            <span>{{ __('about.quick.badge_1') }}</span>
                            <span>{{ __('about.quick.badge_2') }}</span>
                            <span>{{ __('about.quick.badge_3') }}</span>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="about-card">
                                    <i class="fa-solid fa-person-running text-primary"></i>
                                    <div>
                                        <h3 class="h5 fw-bold mb-1">{{ __('about.sport.title') }}</h3>
                                        <p class="text-muted mb-0">{{ __('about.sport.desc') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-card">
                                    <i class="fa-solid fa-laptop-code text-primary"></i>
                                    <div>
                                        <h3 class="h5 fw-bold mb-1">{{ __('about.tech.title') }}</h3>
                                        <p class="text-muted mb-0">{{ __('about.tech.desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Percorso --}}
    <section class="section section-alt">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                <h2 class="fw-bold m-0">{{ __('about.timeline.title') }}</h2>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-primary btn-sm">{{ __('about.timeline.cta') }}</a>
            </div>
            <div class="about-timeline">
                <div class="timeline-item hidden">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3 class="h5 fw-bold mb-1">{{ __('about.timeline.step1.title') }}</h3>
                        <p class="text-muted mb-0">{{ __('about.timeline.step1.desc') }}</p>
                    </div>
                </div>
                <div class="timeline-item hidden">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3 class="h5 fw-bold mb-1">{{ __('about.timeline.step2.title') }}</h3>
                        <p class="text-muted mb-0">{{ __('about.timeline.step2.desc') }}</p>
                    </div>
                </div>
                <div class="timeline-item hidden">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3 class="h5 fw-bold mb-1">{{ __('about.timeline.step3.title') }}</h3>
                        <p class="text-muted mb-0">{{ __('about.timeline.step3.desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Valori --}}
    <section class="section">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">{{ __('about.values.title') }}</h2>
            <div class="row g-4">
                <div class="col-md-4 hidden">
                    <div class="value-card p-4 h-100">
                        <i class="fa-solid fa-stopwatch fa-3x text-secondary mb-3"></i>
                        <h4 class="fw-bold">{{ __('about.values.constanza') }}</h4>
                    </div>
                </div>
                <div class="col-md-4 hidden">
                    <div class="value-card p-4 h-100">
                        <i class="fa-solid fa-puzzle-piece fa-3x text-secondary mb-3"></i>
                        <h4 class="fw-bold">{{ __('about.values.problem') }}</h4>
                    </div>
                </div>
                <div class="col-md-4 hidden">
                    <div class="value-card p-4 h-100">
                        <i class="fa-solid fa-people-group fa-3x text-secondary mb-3"></i>
                        <h4 class="fw-bold">{{ __('about.values.team') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
