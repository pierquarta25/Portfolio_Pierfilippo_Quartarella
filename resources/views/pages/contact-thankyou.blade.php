<x-layouts.app>

    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('contact.thankyou.title') }}</h1>
            <p class="lead text-muted mb-4">{{ __('contact.thankyou.subtitle') }}</p>
            <div class="d-flex flex-wrap gap-3">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg">{{ __('contact.thankyou.cta_home') }}</a>
                <a href="{{ route('projects') }}" class="btn btn-outline-primary btn-lg">{{ __('contact.thankyou.cta_projects') }}</a>
            </div>
        </div>
    </header>

</x-layouts.app>
