<x-layouts.app>

    {{-- Header articolo --}}
    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('blog.ux.title') }}</h1>
            <div class="d-flex flex-wrap align-items-center text-muted gap-3">
                <span class="badge bg-success">{{ __('blog.ux.badge') }}</span>
                <span><i class="fa-regular fa-calendar me-1"></i> {{ __('blog.ux.date') }}</span>
                <span><i class="fa-regular fa-clock me-1"></i> {{ __('blog.ux.readtime') }}</span>
            </div>
        </div>
    </header>

    {{-- Contenuto --}}
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="img-fluid rounded shadow mb-5 w-100" alt="UX Design Sketch">

                    <p class="lead fw-bold mb-4">{{ __('blog.ux.lead') }}</p>
                    <p>{{ __('blog.ux.p1') }}</p>

                    <hr class="my-5">

                    <h2 class="fw-bold mb-3">{{ __('blog.ux.h2_1') }}</h2>
                    <p>{{ __('blog.ux.p2') }}</p>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent"><i class="fa-solid fa-check text-success me-2"></i> {{ __('blog.ux.li1') }}</li>
                        <li class="list-group-item bg-transparent"><i class="fa-solid fa-check text-success me-2"></i> {{ __('blog.ux.li2') }}</li>
                        <li class="list-group-item bg-transparent"><i class="fa-solid fa-check text-success me-2"></i> {{ __('blog.ux.li3') }}</li>
                    </ul>

                    <h2 class="fw-bold mb-3 mt-5">{{ __('blog.ux.h2_2') }}</h2>
                    <p>{{ __('blog.ux.p3') }}</p>
                    <ul>
                        <li>{{ __('blog.ux.li4') }}</li>
                        <li>{{ __('blog.ux.li5') }}</li>
                        <li>{{ __('blog.ux.li6') }}</li>
                    </ul>

                    <h2 class="fw-bold mb-3 mt-5">{{ __('blog.ux.h2_3') }}</h2>
                    <p>{{ __('blog.ux.p4') }}</p>
                    <blockquote class="blockquote border-start border-4 border-success ps-4 my-4 bg-light py-3 pe-3 rounded-end">
                        <p class="mb-0 fst-italic">"{{ __('blog.ux.quote') }}"</p>
                    </blockquote>

                    <div class="mt-5">
                        <h5 class="fw-bold">{{ __('blog.share') }}</h5>
                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ route('blog.index') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body text-center p-4">
                                <img src="{{ asset('media/foto_mia.jpg') }}" alt="Pierfilippo" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="fw-bold">Pierfilippo Quartarella</h5>
                                <p class="text-muted small mb-3">{{ __('blog.author.bio_ux') }}</p>
                                <a href="{{ route('about') }}" class="btn btn-sm btn-primary rounded-pill px-4">{{ __('blog.author.cta') }}</a>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white fw-bold py-3">{{ __('blog.related') }}</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3"><a href="{{ route('blog.show', 'react-2026') }}" class="text-decoration-none text-dark stretched-link">{{ __('blog.react.title') }}</a></li>
                                <li class="list-group-item py-3"><a href="{{ route('blog.show', 'bootstrap-vs-tailwind') }}" class="text-decoration-none text-dark stretched-link">{{ __('blog.frameworks.title') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
