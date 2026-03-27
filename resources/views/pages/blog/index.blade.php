<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <p class="eyebrow">Blog</p>
            <h1 class="display-4 fw-bold mb-3">Ultimi articoli</h1>
            <p class="lead text-muted mb-0">Approfondimenti su UX, frontend e performance.</p>
        </div>
    </header>

    {{-- Elenco articoli --}}
    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card hidden">
                        <div class="blog-tag">UX</div>
                        <h3 class="h5 fw-bold">L'importanza della UX nel Web Design</h3>
                        <p class="text-muted mb-3">Perché la UX non è estetica, ma performance e fiducia.</p>
                        <a href="{{ route('blog.ux') }}" class="btn btn-outline-primary btn-sm">Leggi articolo</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card hidden">
                        <div class="blog-tag">Frontend</div>
                        <h3 class="h5 fw-bold">Come imparare React nel 2026</h3>
                        <p class="text-muted mb-3">RSC, Server Actions e best practice moderne.</p>
                        <a href="{{ route('blog.react') }}" class="btn btn-outline-primary btn-sm">Leggi articolo</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card hidden">
                        <div class="blog-tag">CSS</div>
                        <h3 class="h5 fw-bold">Bootstrap 5 vs Tailwind CSS</h3>
                        <p class="text-muted mb-3">Confronto diretto per scegliere lo stack giusto.</p>
                        <a href="{{ route('blog.frameworks') }}" class="btn btn-outline-primary btn-sm">Leggi articolo</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
