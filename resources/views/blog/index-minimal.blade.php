<x-layouts.app>

    {{-- Header pagina minimal --}}
    <header class="page-header blog-minimal-hero">
        <div class="container">
            <p class="blog-minimal-hero__eyebrow">Journal</p>
            <h1 class="fw-bold mb-2 blog-minimal-hero__title" style="font-size: clamp(2rem, 5vw, 3.25rem);">
                {{ __('blog.page.title') }}
            </h1>
            <p class="lead text-muted mb-0">{{ __('blog.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Elenco articoli minimal --}}
    <section class="section blog-minimal">
        <div class="container">
            <div class="blog-minimal-list">
                <article class="blog-minimal-item">
                    <div class="blog-minimal-meta">UX · {{ __('blog.ux.date') }} · 6 min</div>
                    <h3 class="h4 fw-bold">{{ __('blog.ux.title') }}</h3>
                    <p class="text-muted">{{ __('blog.ux.desc') }}</p>
                    <a href="{{ route('blog.show', 'ux-design') }}" class="link-primary">{{ __('blog.read') }} →</a>
                </article>

                <article class="blog-minimal-item">
                    <div class="blog-minimal-meta">Frontend · {{ __('blog.react.date') }} · 8 min</div>
                    <h3 class="h4 fw-bold">{{ __('blog.react.title') }}</h3>
                    <p class="text-muted">{{ __('blog.react.desc') }}</p>
                    <a href="{{ route('blog.show', 'react-2026') }}" class="link-primary">{{ __('blog.read') }} →</a>
                </article>

                <article class="blog-minimal-item">
                    <div class="blog-minimal-meta">CSS · {{ __('blog.frameworks.date') }} · 10 min</div>
                    <h3 class="h4 fw-bold">{{ __('blog.frameworks.title') }}</h3>
                    <p class="text-muted">{{ __('blog.frameworks.desc') }}</p>
                    <a href="{{ route('blog.show', 'bootstrap-vs-tailwind') }}" class="link-primary">{{ __('blog.read') }} →</a>
                </article>
            </div>
        </div>
    </section>

</x-layouts.app>
