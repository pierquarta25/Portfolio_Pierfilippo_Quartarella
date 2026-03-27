<x-layouts.app>

    <header class="page-header">
        <div class="container text-center">
            <div class="error-illustration mx-auto mb-4" aria-hidden="true">
                <svg viewBox="0 0 240 200" role="img" focusable="false">
                    <defs>
                        <linearGradient id="grad-403" x1="0" x2="1" y1="0" y2="1">
                            <stop offset="0" stop-color="#021c44" />
                            <stop offset="1" stop-color="#0d6efd" />
                        </linearGradient>
                    </defs>
                    <path d="M40,120 C20,80 40,40 90,40 C120,10 190,20 200,70 C230,90 220,150 170,160 C130,190 70,180 50,150 C45,140 42,130 40,120 Z" fill="url(#grad-403)" opacity="0.15"/>
                    <rect x="80" y="70" width="80" height="70" rx="12" fill="#fff" stroke="#021c44" stroke-width="3"/>
                    <path d="M100 70 v-10 a20 20 0 0 1 40 0 v10" fill="none" stroke="#021c44" stroke-width="4"/>
                    <circle cx="120" cy="105" r="6" fill="#021c44"/>
                    <path d="M120 111 v18" stroke="#021c44" stroke-width="4" stroke-linecap="round"/>
                </svg>
            </div>
            <p class="display-1 fw-bold mb-2">403</p>
            <h1 class="h2 fw-bold mb-3">{{ __('errors.403.title') }}</h1>
            <p class="lead text-muted mb-4">{{ __('errors.403.subtitle') }}</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg">{{ __('errors.403.cta_home') }}</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">{{ __('errors.403.cta_contact') }}</a>
            </div>
            <a href="{{ route('home') }}" class="error-home-link mt-4 d-inline-block">{{ __('errors.link_home') }}</a>
        </div>
    </header>

</x-layouts.app>
