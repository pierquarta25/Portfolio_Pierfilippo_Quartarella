<x-layouts.app>

    {{-- Header articolo --}}
    <header class="page-header">
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                <ol class="breadcrumb mb-3">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">React 2026</li>
                </ol>
            </nav>
            <h1 class="display-4 fw-bold mb-3">Come imparare React nel 2026</h1>
            <div class="d-flex flex-wrap align-items-center text-muted gap-3">
                <span class="badge bg-primary">Frontend</span>
                <span><i class="fa-regular fa-calendar me-1"></i> 15 Feb 2026</span>
                <span><i class="fa-regular fa-clock me-1"></i> 8 min lettura</span>
            </div>
        </div>
    </header>

    {{-- Contenuto --}}
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="img-fluid rounded shadow mb-5 w-100" alt="React Code">

                    <p class="lead fw-bold mb-4">
                        React non è più solo una libreria UI, è un ecosistema completo. Nel 2026, l'approccio
                        "Component-Driven" si è evoluto verso un modello ibrido Server/Client.
                    </p>

                    <p>
                        Se stai iniziando oggi, dimentica i vecchi tutorial del 2020. Il panorama è cambiato con
                        l'introduzione stabile dei React Server Components (RSC).
                    </p>

                    <hr class="my-5">

                    <h2 class="fw-bold mb-3">1. Il paradigma Server Components</h2>
                    <p>
                        La più grande barriera all'ingresso oggi è capire <strong>dove</strong> viene eseguito il codice.
                    </p>

                    <div class="card bg-light border-0 mb-4">
                        <div class="card-body font-monospace small">
<pre class="mb-0 text-secondary">
// Server Component (Default)
async function ProductList() {
  const products = await db.query('SELECT * FROM products'); // Direct DB access!
  
  return (
    &lt;ul&gt;
      {products.map(p => &lt;li key={p.id}&gt;{p.name}&lt;/li&gt;)}
    &lt;/ul&gt;
  );
}
</pre>
                        </div>
                    </div>

                    <h2 class="fw-bold mb-3 mt-5">2. Hooks: Oltre useState e useEffect</h2>
                    <ul>
                        <li><strong>useActionState:</strong> Per gestire lo stato delle Server Actions.</li>
                        <li><strong>useOptimistic:</strong> Per aggiornare la UI prima della risposta.</li>
                        <li><strong>use:</strong> API per leggere Context e Promises in modo condizionale.</li>
                    </ul>

                    <h2 class="fw-bold mb-3 mt-5">3. Non reinventare la ruota</h2>
                    <blockquote class="blockquote border-start border-4 border-primary ps-4 my-4 bg-light py-3 pe-3 rounded-end">
                        <p class="mb-0 fst-italic">"La produttività nel 2026 non si misura in righe di codice scritte, ma in funzionalità spedite in produzione in modo sicuro e scalabile."</p>
                    </blockquote>

                    <div class="alert alert-info mt-5 d-flex align-items-center">
                        <i class="fa-solid fa-lightbulb fa-2x me-3"></i>
                        <div>
                            <strong>Consiglio Pro:</strong> Inizia costruendo un clone di un'app reale.
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5 class="fw-bold">Ti è piaciuto l'articolo? Parliamone!</h5>
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
                                <p class="text-muted small mb-3">Junior Full Stack Developer appassionato di React, UX e architetture scalabili.</p>
                                <a href="{{ route('about') }}" class="btn btn-sm btn-primary rounded-pill px-4">Chi Sono</a>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white fw-bold py-3">Articoli Correlati</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3"><a href="{{ route('blog.ux') }}" class="text-decoration-none text-dark stretched-link">L'importanza della UX nel Web Design</a></li>
                                <li class="list-group-item py-3"><a href="{{ route('blog.frameworks') }}" class="text-decoration-none text-dark stretched-link">Bootstrap 5 vs Tailwind CSS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
