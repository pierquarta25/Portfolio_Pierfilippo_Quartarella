<x-layouts.app>

    <header class="page-header">
        <div class="container">
            <a href="{{ route('projects') }}" class="btn btn-link p-0 mb-3">{{ __('project.back') }}</a>
            <h1 class="display-4 fw-bold mb-3">{{ __('project.art.title') }}</h1>
            <p class="lead text-muted mb-0">{{ __('project.art.detail.summary') }}</p>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-7">
                    <img src="{{ asset('media/Sito_d\'arte.png') }}" alt="Sito d'arte" class="img-fluid rounded-4 shadow-sm">

                    <div class="mt-4">
                        <h2 class="h4 fw-bold">{{ __('project.detail.highlights') }}</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent">{{ __('project.art.detail.highlight_1') }}</li>
                            <li class="list-group-item bg-transparent">{{ __('project.art.detail.highlight_2') }}</li>
                            <li class="list-group-item bg-transparent">{{ __('project.art.detail.highlight_3') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm p-4">
                        <h3 class="h5 fw-bold">{{ __('project.detail.overview') }}</h3>
                        <p class="text-muted mb-3">{{ __('project.art.detail.overview') }}</p>

                        <h3 class="h5 fw-bold">{{ __('project.detail.stack') }}</h3>
                        <div class="project-tags mb-3">
                            <span>HTML5</span><span>CSS3</span><span>Bootstrap</span>
                        </div>

                        <h3 class="h5 fw-bold">{{ __('project.detail.role') }}</h3>
                        <p class="text-muted mb-0">{{ __('project.art.detail.role') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
