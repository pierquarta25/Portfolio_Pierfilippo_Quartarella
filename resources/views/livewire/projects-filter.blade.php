<div class="projects-filter-section">
    {{-- Filtri --}}
    <div class="row mb-5 align-items-center">
        <div class="col-md-6">
            <input 
                type="text" 
                class="form-control" 
                placeholder="{{ __('projects.filter.search') }}"
                wire:model.live.debounce="search"
            >
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
            <div class="d-flex flex-wrap gap-2">
                <button 
                    class="btn btn-sm @if(empty($tag)) btn-primary @else btn-outline-primary @endif"
                    wire:click="$set('tag', '')"
                >
                    {{ __('projects.filter.all') }}
                </button>
                @foreach($tags as $t)
                    <button 
                        class="btn btn-sm @if($tag === $t) btn-primary @else btn-outline-primary @endif"
                        wire:click="$set('tag', '{{ $t }}')"
                    >
                        {{ $t }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Results Info --}}
    <p class="text-muted mb-4">
        {{ __('projects.filter.found', ['count' => $projectsCount]) }}
    </p>

    {{-- Projects Grid --}}
    <div class="row g-4">
        @forelse($projects as $project)
            <div class="col-md-6 col-lg-4">
                <article class="project-card" wire:transition>
                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 200px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                        {{ $project['title'] }}
                    </div>
                    <div class="project-body">
                        <h3 class="h5 fw-bold mb-2">{{ $project['title'] }}</h3>
                        <p class="text-muted mb-3">{{ __('projects.filter.teaser', ['tags' => implode(', ', array_slice($project['tags'], 0, 2))]) }}</p>
                        <div class="project-tags mb-3">
                            @foreach($project['tags'] as $tag)
                                <span class="badge bg-light text-dark me-1">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <a href="{{ route($project['route']) }}" class="btn btn-outline-primary btn-sm">{{ __('project.view') }}</a>
                    </div>
                </article>
            </div>
        @empty
            <div class="col-12">
                <div class="text-center text-muted py-5">
                    <i class="fa-solid fa-folder-open fa-2x mb-3"></i>
                    <p>{{ __('projects.filter.none') }}</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
