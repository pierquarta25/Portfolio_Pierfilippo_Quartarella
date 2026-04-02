<nav id="mainNavbar" class="navbar navbar-light fixed-top navbar-tech">
    <div class="container">

        {{-- Logo / Brand --}}
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <img
                src="{{ asset('media/favicon.svg') }}"
                alt="Logo Pierfilippo Quartarella"
                width="36"
                height="36"
            >
        </a>

        {{-- Azioni a destra: lingua, tema, menu --}}
        <div class="d-flex align-items-center gap-2" style="gap: 0.4rem !important;">

            {{-- LINGUA: gestita da Livewire (ricarica la pagina) --}}
            <button
                wire:click="cambia_lingua"
                id="lang-toggle"
                class="btn btn-sm btn-outline-secondary rounded-pill px-2 px-md-3"
                style="padding: 0.4rem 0.6rem; font-size: 0.75rem;"
            >
                <span class="d-none d-sm-inline">{{ $lingua === 'it' ? 'EN' : 'IT' }}</span>
                <span class="d-inline d-sm-none">{{ $lingua === 'it' ? 'E' : 'I' }}</span>
            </button>

            {{-- TEMA: gestito da JavaScript (nessun reload) --}}
            <button
                id="theme-toggle"
                class="btn btn-sm btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center"
                aria-label="{{ __('theme.label') }}"
                style="width:32px; height:32px; padding: 0;"
            >
                <i class="fa-solid fa-moon" style="font-size: 0.9rem;"></i>
            </button>

            {{-- Menu a tendina --}}
            <div class="dropdown">
                <button
                    class="btn btn-sm btn-outline-secondary menu-toggle d-flex align-items-center justify-content-center"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    aria-label="Apri menu"
                    style="width: 32px; height: 32px; padding: 0;"
                >
                    <span class="menu-bars" aria-hidden="true">
                        <span style="width: 14px; height: 2px;"></span>
                        <span style="width: 14px; height: 2px;"></span>
                        <span style="width: 14px; height: 2px;"></span>
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('nav.home') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('about') }}">{{ __('nav.about') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('projects.index') }}">{{ __('nav.projects') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('blog.index') }}">{{ __('nav.blog') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('contact') }}">{{ __('nav.contact') }}</a></li>
                </ul>
            </div>

        </div>

    </div>
</nav>
