<x-layouts.app>

    <header class="page-header">
        <div class="container text-center">
            <div class="error-illustration mx-auto mb-4" aria-hidden="true">
                <svg viewBox="0 0 240 200" role="img" focusable="false">
                    <defs>
                        <linearGradient id="grad-404" x1="0" x2="1" y1="0" y2="1">
                            <stop offset="0" stop-color="#021c44" />
                            <stop offset="1" stop-color="#0d6efd" />
                        </linearGradient>
                    </defs>
                    <path d="M40,120 C20,80 40,40 90,40 C120,10 190,20 200,70 C230,90 220,150 170,160 C130,190 70,180 50,150 C45,140 42,130 40,120 Z" fill="url(#grad-404)" opacity="0.15"/>
                    <circle cx="100" cy="92" r="32" fill="#fff" stroke="#021c44" stroke-width="3"/>
                    <circle cx="150" cy="92" r="32" fill="#fff" stroke="#021c44" stroke-width="3"/>
                    <path d="M85 80 h30" stroke="#021c44" stroke-width="4" stroke-linecap="round"/>
                    <path d="M135 80 h30" stroke="#021c44" stroke-width="4" stroke-linecap="round"/>
                    <path d="M95 115 q25 15 50 0" stroke="#021c44" stroke-width="4" fill="none" stroke-linecap="round"/>
                </svg>
            </div>
            <p class="display-1 fw-bold mb-2">404</p>
            <h1 class="h2 fw-bold mb-3">{{ __('errors.404.title') }}</h1>
            <p class="lead text-muted mb-4">{{ __('errors.404.subtitle') }}</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg">{{ __('errors.404.cta_home') }}</a>
                <a href="{{ route('projects') }}" class="btn btn-outline-primary btn-lg">{{ __('errors.404.cta_projects') }}</a>
            </div>
            <a href="{{ route('home') }}" class="error-home-link mt-4 d-inline-block">{{ __('errors.link_home') }}</a>
        </div>
    </header>

</x-layouts.app>
