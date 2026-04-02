<x-layouts.app>

    {{-- Header pagina case-study --}}
    <header class="page-header blog-case-hero">
        <div class="container">
            <p class="blog-case-hero__eyebrow">Case Study</p>
            <h1 class="fw-bold mb-3 blog-case-hero__title" style="font-size: clamp(2rem, 5vw, 3.5rem);">
                {{ __('blog.page.title') }}
            </h1>
            <p class="lead mb-0 blog-case-hero__subtitle">Focus su problemi reali e soluzioni tecniche.</p>
        </div>
    </header>

    {{-- Elenco articoli (formato editoriale) --}}
    <section class="section blog-case">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <article class="case-card">
                        <div class="case-card__meta">
                            <span class="case-badge">UX</span>
                            <span class="case-date">{{ __('blog.ux.date') }}</span>
                        </div>
                        <h3 class="h4 fw-bold">{{ __('blog.ux.title') }}</h3>
                        <p class="text-muted">{{ __('blog.ux.desc') }}</p>
                        <a href="{{ route('blog.show', 'ux-design') }}" class="btn btn-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="case-card case-card--side">
                        <div class="case-card__meta">
                            <span class="case-badge case-badge--frontend">Frontend</span>
                            <span class="case-date">{{ __('blog.react.date') }}</span>
                        </div>
                        <h3 class="h5 fw-bold">{{ __('blog.react.title') }}</h3>
                        <p class="text-muted">{{ __('blog.react.desc') }}</p>
                        <a href="{{ route('blog.show', 'react-2026') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-lg-6">
                    <article class="case-card case-card--alt">
                        <div class="case-card__meta">
                            <span class="case-badge case-badge--css">CSS</span>
                            <span class="case-date">{{ __('blog.frameworks.date') }}</span>
                        </div>
                        <h3 class="h5 fw-bold">{{ __('blog.frameworks.title') }}</h3>
                        <p class="text-muted">{{ __('blog.frameworks.desc') }}</p>
                        <a href="{{ route('blog.show', 'bootstrap-vs-tailwind') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-lg-6">
                    <div class="case-aside">
                        <h4 class="fw-bold mb-3">In evidenza</h4>
                        <ul class="case-list">
                            <li>UX: ridurre attrito e aumentare conversioni</li>
                            <li>React 2026: Server/Client senza confusione</li>
                            <li>Bootstrap vs Tailwind: quando scegliere uno</li>
                        </ul>
                        <a href="{{ route('blog.show', 'ux-design') }}" class="btn btn-dark btn-sm">Leggi il case principale</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
