<x-layouts.app>

    <header class="page-header">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <p class="error-kicker">{{ __('errors.500.kicker') }}</p>
                    <h1 class="display-3 fw-bold mb-3">{{ __('errors.500.title') }}</h1>
                    <p class="lead text-muted mb-4">{{ __('errors.500.subtitle') }}</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('home') }}" class="btn btn-primary btn-lg">{{ __('errors.500.cta_home') }}</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">{{ __('errors.500.cta_contact') }}</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="error-orbit">
                        <div class="orbit-ring"></div>
                        <div class="orbit-ring orbit-ring--second"></div>
                        <div class="orbit-dot orbit-dot--one"></div>
                        <div class="orbit-dot orbit-dot--two"></div>
                        <div class="orbit-core">500</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</x-layouts.app>
