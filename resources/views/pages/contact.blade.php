<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <p class="eyebrow">Contatti</p>
            <h1 class="display-4 fw-bold mb-3">Parliamo del tuo progetto</h1>
            <p class="lead text-muted mb-0">Scrivimi, rispondo velocemente e in modo chiaro.</p>
        </div>
    </header>

    {{-- Contenuto --}}
    <section class="section">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <div class="contact-card hidden">
                        <h3 class="h5 fw-bold mb-3">Hai un progetto in mente?</h3>
                        <p class="text-muted mb-4">
                            Possiamo partire da un’idea o da un redesign. Ti aiuto a trasformarla in un sito che
                            comunica davvero.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a class="btn btn-primary btn-lg" href="mailto:pier.quarta25@icloud.com">
                                Scrivimi una mail
                            </a>
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('projects') }}">
                                Guarda i progetti
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info hidden">
                        <div class="info-row">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <p class="mb-0 fw-semibold">Email</p>
                                <a href="mailto:pier.quarta25@icloud.com">pier.quarta25@icloud.com</a>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <p class="mb-0 fw-semibold">Base</p>
                                <span>Italia</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-briefcase"></i>
                            <div>
                                <p class="mb-0 fw-semibold">Disponibilità</p>
                                <span>Freelance e collaborazioni</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <div>
                                <p class="mb-0 fw-semibold">CV</p>
                                <a href="{{ asset('media/Pierfilippo_Quartarella_CV.pdf') }}" download>
                                    Scarica il CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
