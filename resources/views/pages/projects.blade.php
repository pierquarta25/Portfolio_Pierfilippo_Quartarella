<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <p class="eyebrow">Progetti</p>
            <h1 class="display-4 fw-bold mb-3">I miei lavori</h1>
            <p class="lead text-muted mb-0">Una selezione completa dei progetti con focus su UI e performance.</p>
        </div>
    </header>

    {{-- Griglia progetti --}}
    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/TechZone.png') }}" alt="TechZone">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">TechZone</h3>
                            <p class="text-muted mb-3">Landing moderna per prodotti tech con CTA chiare.</p>
                            <div class="project-tags">
                                <span>UI</span><span>Bootstrap</span><span>JS</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/Sito_d\'arte.png') }}" alt="Sito d'arte">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">Sito d'Arte</h3>
                            <p class="text-muted mb-3">Esperienza visiva elegante per portfolio artistico.</p>
                            <div class="project-tags">
                                <span>Design</span><span>UX</span><span>Brand</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/progettoRED.png') }}" alt="Progetto RED">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">Progetto RED</h3>
                            <p class="text-muted mb-3">Layout ad alto impatto con palette dinamica.</p>
                            <div class="project-tags">
                                <span>Landing</span><span>CSS</span><span>UX</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/TechZone.png') }}" alt="Demo E-commerce">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">Demo E-commerce</h3>
                            <p class="text-muted mb-3">Struttura chiara e flussi d'acquisto semplici.</p>
                            <div class="project-tags">
                                <span>E-commerce</span><span>UX</span><span>UI</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/navigazione_progetto.png') }}" alt="Sistema di navigazione">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">Sistema di Navigazione</h3>
                            <p class="text-muted mb-3">UI scalabile con componenti riutilizzabili.</p>
                            <div class="project-tags">
                                <span>Componenti</span><span>UI</span><span>Accessibilità</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card hidden">
                        <img src="{{ asset('media/Aulab.png') }}" alt="Aulab">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">Aulab</h3>
                            <p class="text-muted mb-3">Pagina informativa con focus su conversione.</p>
                            <div class="project-tags">
                                <span>Marketing</span><span>Conversion</span><span>UI</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
