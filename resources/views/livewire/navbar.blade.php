<nav id="mainNavbar" class="navbar navbar-light fixed-top">
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
        <div class="d-flex align-items-center gap-2">

            {{-- LINGUA: gestita da Livewire (ricarica la pagina) --}}
            <button
                wire:click="cambia_lingua"
                id="lang-toggle"
                class="btn btn-sm btn-outline-secondary rounded-pill px-3"
            >
                {{ $lingua === 'it' ? 'EN' : 'IT' }}
            </button>

            {{-- TEMA: gestito da JavaScript (nessun reload) --}}
            <button
                id="theme-toggle"
                class="btn btn-sm btn-outline-secondary rounded-circle"
                aria-label="{{ __('theme.label') }}"
                style="width:36px; height:36px;"
            >
                <i class="fa-solid fa-moon"></i>
            </button>

            {{-- Menu a tendina --}}
            <div class="dropdown">
                <button
                    class="btn btn-sm btn-outline-secondary menu-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    aria-label="Apri menu"
                >
                    <span class="menu-bars" aria-hidden="true">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('nav.home') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('about') }}">{{ __('nav.about') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('projects') }}">{{ __('nav.projects') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('blog.index') }}">{{ __('nav.blog') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('contact') }}">{{ __('nav.contact') }}</a></li>
                </ul>
            </div>

        </div>

    </div>
</nav>
