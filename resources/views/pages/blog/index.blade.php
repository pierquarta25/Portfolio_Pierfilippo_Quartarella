<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('blog.page.title') }}</h1>
            <p class="lead text-muted mb-0">{{ __('blog.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Elenco articoli --}}
    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card hidden">
                        <div class="blog-tag">UX</div>
                        <h3 class="h5 fw-bold">{{ __('blog.ux.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.ux.desc') }}</p>
                        <a href="{{ route('blog.ux') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card hidden">
                        <div class="blog-tag">Frontend</div>
                        <h3 class="h5 fw-bold">{{ __('blog.react.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.react.desc') }}</p>
                        <a href="{{ route('blog.react') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card hidden">
                        <div class="blog-tag">CSS</div>
                        <h3 class="h5 fw-bold">{{ __('blog.frameworks.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.frameworks.desc') }}</p>
                        <a href="{{ route('blog.frameworks') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
