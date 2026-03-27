<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <p class="eyebrow">Chi sono</p>
            <h1 class="display-4 fw-bold mb-3">La mia Storia</h1>
            <p class="lead text-muted mb-0">Oltre il codice: il percorso che mi ha portato qui.</p>
        </div>
    </header>

    {{-- Storia --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6 hidden text-center">
                    <img src="{{ asset('media/foto_mia.jpg') }}" alt="Pierfilippo Quartarella" class="img-fluid rounded-circle shadow-lg border border-5 border-white">
                </div>
                <div class="col-md-6 hidden">
                    <div class="mb-5">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-person-running fa-2x text-primary me-3"></i>
                            <h3 class="fw-bold m-0">Mentalità Sportiva</h3>
                        </div>
                        <p class="text-muted">
                            Anni di agonismo mi hanno insegnato che il talento senza disciplina non porta risultati.
                            Porto questa stessa mentalità nello sviluppo: resilienza, lavoro di squadra e orientamento
                            all'obiettivo.
                        </p>
                    </div>

                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa-solid fa-laptop-code fa-2x text-primary me-3"></i>
                            <h3 class="fw-bold m-0">La Svolta Tech</h3>
                        </div>
                        <p class="text-muted">
                            La curiosità per il web si è trasformata in passione. Ho iniziato a studiare HTML, CSS e JS
                            scoprendo il piacere di costruire cose dal nulla.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Valori --}}
    <section class="section section-alt">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">I miei Valori</h2>
            <div class="row g-4">
                <div class="col-md-4 hidden">
                    <div class="value-card p-4 h-100">
                        <i class="fa-solid fa-stopwatch fa-3x text-secondary mb-3"></i>
                        <h4 class="fw-bold">Costanza</h4>
                    </div>
                </div>
                <div class="col-md-4 hidden">
                    <div class="value-card p-4 h-100">
                        <i class="fa-solid fa-puzzle-piece fa-3x text-secondary mb-3"></i>
                        <h4 class="fw-bold">Problem Solving</h4>
                    </div>
                </div>
                <div class="col-md-4 hidden">
                    <div class="value-card p-4 h-100">
                        <i class="fa-solid fa-people-group fa-3x text-secondary mb-3"></i>
                        <h4 class="fw-bold">Teamwork</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
