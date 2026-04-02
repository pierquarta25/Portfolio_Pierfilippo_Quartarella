<x-layouts.app>

    {{-- Header articolo --}}
    <header class="page-header">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('blog.react.title') }}</h1>
            <div class="d-flex flex-wrap align-items-center text-muted gap-3">
                <span class="badge bg-primary">{{ __('blog.react.badge') }}</span>
                <span><i class="fa-regular fa-calendar me-1"></i> {{ __('blog.react.date') }}</span>
                <span><i class="fa-regular fa-clock me-1"></i> {{ __('blog.react.readtime') }}</span>
            </div>
        </div>
    </header>

    {{-- Contenuto --}}
    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="img-fluid rounded shadow mb-5 w-100" alt="React Code">

                    <p class="lead fw-bold mb-4">{{ __('blog.react.lead') }}</p>
                    <p>{{ __('blog.react.p1') }}</p>

                    <hr class="my-5">

                    <h2 class="fw-bold mb-3">{{ __('blog.react.h2_1') }}</h2>
                    <p>{{ __('blog.react.p2') }}</p>

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

                    <h2 class="fw-bold mb-3 mt-5">{{ __('blog.react.h2_2') }}</h2>
                    <ul>
                        <li>{{ __('blog.react.li1') }}</li>
                        <li>{{ __('blog.react.li2') }}</li>
                        <li>{{ __('blog.react.li3') }}</li>
                    </ul>

                    <h2 class="fw-bold mb-3 mt-5">{{ __('blog.react.h2_3') }}</h2>
                    <blockquote class="blockquote border-start border-4 border-primary ps-4 my-4 bg-light py-3 pe-3 rounded-end">
                        <p class="mb-0 fst-italic">"{{ __('blog.react.quote') }}"</p>
                    </blockquote>

                    <div class="alert alert-info mt-5 d-flex align-items-center">
                        <i class="fa-solid fa-lightbulb fa-2x me-3"></i>
                        <div>
                            {{ __('blog.react.tip') }}
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5 class="fw-bold">{{ __('blog.share2') }}</h5>
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
                                <p class="text-muted small mb-3">{{ __('blog.author.bio_react') }}</p>
                                <a href="{{ route('about') }}" class="btn btn-sm btn-primary rounded-pill px-4">{{ __('blog.author.cta') }}</a>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white fw-bold py-3">{{ __('blog.related') }}</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-3"><a href="{{ route('blog.show', 'ux-design') }}" class="text-decoration-none text-dark stretched-link">{{ __('blog.ux.title') }}</a></li>
                                <li class="list-group-item py-3"><a href="{{ route('blog.show', 'bootstrap-vs-tailwind') }}" class="text-decoration-none text-dark stretched-link">{{ __('blog.frameworks.title') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
