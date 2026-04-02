<div class="blog-filter-section">
    {{-- Filtri --}}
    <div class="row mb-5 align-items-center">
        <div class="col-md-6">
            <input 
                type="text" 
                class="form-control" 
                placeholder="Cerca articoli..."
                wire:model.live.debounce="search"
            >
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
            <select class="form-select" wire:model.live="category">
                <option value="">{{ __('blog.filter.all') }}</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}">{{ $cat }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- Results Info --}}
    <p class="text-muted mb-4">
        {{ __('blog.filter.found', ['count' => $articlesCount]) }}
    </p>

    {{-- Articles Grid --}}
    <div class="row g-4">
        @forelse($articles as $article)
            <div class="col-md-6 col-lg-4">
                <article class="blog-card" wire:transition>
                    <div class="blog-tag">{{ $article['category'] }}</div>
                    <h3 class="h5 fw-bold">{{ $article['title'] }}</h3>
                    <p class="text-muted mb-3">{{ __('blog.filter.teaser', ['category' => strtolower($article['category'])]) }}</p>
                    <a href="{{ route($article['route']) }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                </article>
            </div>
        @empty
            <div class="col-12">
                <div class="text-center text-muted py-5">
                    <i class="fa-solid fa-magnifying-glass fa-2x mb-3"></i>
                    <p>{{ __('blog.filter.none') }}</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
