<x-layouts.app>

    {{-- Header articolo --}}
    <header class="page-header">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                <ol class="breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UX Design</li>
                </ol>
            </nav>
            <h1 class="display-4 fw-bold mb-3">L'importanza della UX nel Web Design</h1>
            <div class="d-flex flex-wrap align-items-center text-muted gap-3">
                <span class="badge bg-success">Design</span>
                <span><i class="fa-regular fa-calendar me-1"></i> 10 Feb 2026</span>
                <span><i class="fa-regular fa-clock me-1"></i> 6 min lettura</span>
            </div>
        </div>
    </header>

    {{-- Contenuto --}}
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="img-fluid rounded shadow mb-5 w-100" alt="UX Design Sketch">

                    <p class="lead fw-bold mb-4">
                        Un sito web esteticamente gradevole non basta più. Se l'utente non riesce a trovare ciò che
                        cerca in pochi secondi, se ne andrà. La UX non è "abbellire", è "far funzionare".
                    </p>

                    <p>
                        Nel mercato digitale odierno, la tolleranza all'attrito è zero. Un ritardo di 1 secondo nel
                        caricamento può costare il 7% nelle conversioni. Analizziamo i pilastri della UX moderna.
                    </p>

                    <hr class="my-5">

                    <h2 class="fw-bold mb-3">1. La regola "Don't Make Me Think"</h2>
                    <p>
                        Steve Krug lo ha detto meglio di chiunque altro. Ogni volta che un utente si ferma a chiedersi
                        <em>"questo è un bottone o un'immagine?"</em>, hai perso punti fiducia.
                    </p>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent"><i class="fa-solid fa-check text-success me-2"></i> Usa dimensioni diverse per Titoli, Sottotitoli e Corpo.</li>
                        <li class="list-group-item bg-transparent"><i class="fa-solid fa-check text-success me-2"></i> Spazio bianco (Whitespace) per far respirare i contenuti.</li>
                        <li class="list-group-item bg-transparent"><i class="fa-solid fa-check text-success me-2"></i> Colori coerenti per le Call to Action (CTA).</li>
                    </ul>

                    <h2 class="fw-bold mb-3 mt-5">2. Accessibilità (a11y) non è un optional</h2>
                    <p>
                        Un buon design è inclusivo. Progettare per l'accessibilità migliora l'esperienza per tutti,
                        non solo per chi ha disabilità.
                    </p>
                    <ul>
                        <li>Il contrasto testo/sfondo sia almeno 4.5:1.</li>
                        <li>Tutte le immagini abbiano un <code>alt</code> descrittivo.</li>
                        <li>Il sito sia navigabile da tastiera.</li>
                    </ul>

                    <h2 class="fw-bold mb-3 mt-5">3. Micro-interazioni: Il diavolo è nei dettagli</h2>
                    <p>
                        Le micro-interazioni sono quei piccoli feedback che rendono un'interfaccia "viva".
                    </p>
                    <blockquote class="blockquote border-start border-4 border-success ps-4 my-4 bg-light py-3 pe-3 rounded-end">
                        <p class="mb-0 fst-italic">"Le micro-interazioni sono la differenza tra un prodotto che funziona e uno che si ama usare."</p>
                    </blockquote>

                    <div class="mt-5">
                        <h5 class="fw-bold">Ti è stato utile? Parliamone!</h5>
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
                                <p class="text-muted small mb-3">Junior Full Stack Developer. Credo che il codice debba servire l'umano, non viceversa.</p>
                                <a href="{{ route('about') }}" class="btn btn-sm btn-primary rounded-pill px-4">Chi Sono</a>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white fw-bold py-3">Articoli Correlati</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3"><a href="{{ route('blog.react') }}" class="text-decoration-none text-dark stretched-link">Come imparare React nel 2026</a></li>
                                <li class="list-group-item py-3"><a href="{{ route('blog.frameworks') }}" class="text-decoration-none text-dark stretched-link">Bootstrap 5 vs Tailwind CSS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
