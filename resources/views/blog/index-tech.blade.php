<x-layouts.app>

    {{-- Header pagina tech --}}
    <header class="page-header blog-hero">
        <div class="container">
            <p class="blog-hero__eyebrow">{{ __('blog.tech.eyebrow') }}</p>
            <h1 class="fw-bold mb-3 blog-hero__title" style="font-size: clamp(2rem, 5vw, 3.75rem);">
                {{ __('blog.page.title') }}
            </h1>
            <p class="lead mb-0 blog-hero__subtitle">{{ __('blog.page.subtitle') }}</p>

            <div class="blog-hero__meta mt-4">
                <span class="blog-hero__pill">{{ __('blog.hero.tag_frontend') }}</span>
                <span class="blog-hero__pill">{{ __('blog.hero.tag_ux') }}</span>
                <span class="blog-hero__pill">{{ __('blog.hero.tag_performance') }}</span>
                <span class="blog-hero__pill">{{ __('blog.hero.tag_laravel') }}</span>
            </div>
        </div>
    </header>

    {{-- Elenco articoli (uguali alla home) --}}
    <section class="section blog-grid">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card blog-card--tech">
                        <div class="blog-card__top">
                            <div class="blog-tag">{{ __('blog.tag.ux') }}</div>
                            <span class="blog-readtime">{{ __('blog.readtime.short', ['min' => 6]) }}</span>
                        </div>
                        <h3 class="h5 fw-bold">{{ __('blog.ux.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.ux.desc') }}</p>
                        <a href="{{ route('blog.show', 'ux-design') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card blog-card--tech">
                        <div class="blog-card__top">
                            <div class="blog-tag">{{ __('blog.tag.frontend') }}</div>
                            <span class="blog-readtime">{{ __('blog.readtime.short', ['min' => 8]) }}</span>
                        </div>
                        <h3 class="h5 fw-bold">{{ __('blog.react.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.react.desc') }}</p>
                        <a href="{{ route('blog.show', 'react-2026') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card blog-card--tech">
                        <div class="blog-card__top">
                            <div class="blog-tag">{{ __('blog.tag.css') }}</div>
                            <span class="blog-readtime">{{ __('blog.readtime.short', ['min' => 10]) }}</span>
                        </div>
                        <h3 class="h5 fw-bold">{{ __('blog.frameworks.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.frameworks.desc') }}</p>
                        <a href="{{ route('blog.show', 'bootstrap-vs-tailwind') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
