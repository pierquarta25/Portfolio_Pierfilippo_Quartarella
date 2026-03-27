<x-layouts.app>

    {{-- Header articolo --}}
    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('blog.frameworks.title') }}</h1>
            <div class="d-flex flex-wrap align-items-center text-muted gap-3">
                <span class="badge bg-warning text-dark">{{ __('blog.frameworks.badge') }}</span>
                <span><i class="fa-regular fa-calendar me-1"></i> {{ __('blog.frameworks.date') }}</span>
                <span><i class="fa-regular fa-clock me-1"></i> {{ __('blog.frameworks.readtime') }}</span>
            </div>
        </div>
    </header>

    {{-- Contenuto --}}
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <img src="https://images.unsplash.com/photo-1507721999472-8ed4421c4af2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="img-fluid rounded shadow mb-5 w-100" alt="Code Screen">

                    <p class="lead fw-bold mb-4">{{ __('blog.frameworks.lead') }}</p>
                    <p>{{ __('blog.frameworks.p1') }}</p>

                    <hr class="my-5">

                    <h2 class="fw-bold mb-4">{{ __('blog.frameworks.h2_table') }}</h2>
                    <div class="table-responsive mb-5">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Feature</th>
                                    <th>Bootstrap 5.3+</th>
                                    <th>Tailwind CSS 4.0</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Approccio</strong></td>
                                    <td>Component-Based (btn, card)</td>
                                    <td>Utility-First (p-4, flex)</td>
                                </tr>
                                <tr>
                                    <td><strong>Customizzazione</strong></td>
                                    <td>Tramite SASS variables</td>
                                    <td>Configurazione JS / Arbitrary values</td>
                                </tr>
                                <tr>
                                    <td><strong>File Size</strong></td>
                                    <td>Medio (~20kb gzip)</td>
                                    <td>Minuscolo (Purged, <10kb)</td>
                                </tr>
                                <tr>
                                    <td><strong>Curva Apprendimento</strong></td>
                                    <td>Bassa (Copia-incolla facile)</td>
                                    <td>Media (Devi conoscere CSS)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="fw-bold mb-3">{{ __('blog.frameworks.h2_bootstrap') }}</h2>
                    <p>{{ __('blog.frameworks.p2') }}</p>

                    <h2 class="fw-bold mb-3 mt-5">{{ __('blog.frameworks.h2_tailwind') }}</h2>
                    <p>{{ __('blog.frameworks.p3') }}</p>

                    <div class="alert alert-warning mt-5">
                        {{ __('blog.frameworks.verdict') }}
                    </div>

                    <div class="mt-5">
                        <h5 class="fw-bold">{{ __('blog.discuss') }}</h5>
                        <div class="d-flex gap-2 mt-3">
                            <a href="https://github.com/pierquarta25" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-github me-2"></i>GitHub</a>
                            <a href="https://www.linkedin.com/in/pier-quartarella/" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-linkedin me-2"></i>LinkedIn</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body text-center p-4">
                                <img src="{{ asset('media/foto_mia.jpg') }}" alt="Pierfilippo" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                                <h5 class="fw-bold">Pierfilippo Quartarella</h5>
                                <p class="text-muted small mb-3">Junior Full Stack Developer. Amo sperimentare con nuovi stack e ottimizzare le performance.</p>
                                <a href="{{ route('about') }}" class="btn btn-sm btn-primary rounded-pill px-4">Chi Sono</a>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white fw-bold py-3">{{ __('blog.related') }}</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3"><a href="{{ route('blog.react') }}" class="text-decoration-none text-dark stretched-link">{{ __('blog.react.title') }}</a></li>
                                <li class="list-group-item py-3"><a href="{{ route('blog.ux') }}" class="text-decoration-none text-dark stretched-link">{{ __('blog.ux.title') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
