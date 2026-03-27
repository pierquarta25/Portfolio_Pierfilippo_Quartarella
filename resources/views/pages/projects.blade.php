<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('projects.page.title') }}</h1>
            <p class="lead text-muted mb-0">{{ __('projects.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Griglia progetti --}}
    <section class="section">
        <div class="container">
            @livewire('projects-filter')
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
