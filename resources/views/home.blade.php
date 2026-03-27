<x-layouts.app>

    {{-- HERO --}}
    <header id="hero" class="hero-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold">
                        {{ __('home.hero.title') }} <span class="gradient-text">Pierfilippo</span>
                    </h1>
                    <h2 class="h4 text-primary mb-4">{{ __('home.hero.subtitle') }}</h2>
                    <p class="lead text-secondary">
                        {{ __('home.hero.desc') }}
                    </p>
                    <div class="mt-4">
                        <a href="#projects" class="btn btn-primary btn-lg me-2 mb-2">{{ __('home.hero.cta_projects') }}</a>
                        <a href="{{ asset('media/Pierfilippo_Quartarella_CV.pdf') }}" download class="btn btn-outline-primary btn-lg mb-2">
                            <i class="fa-solid fa-download me-2"></i>{{ __('home.hero.cta_cv') }}
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-center mt-4 mt-md-0">
                    <img src="{{ asset('media/foto_mia.jpg') }}" alt="Foto Profilo Pierfilippo" class="img-fluid rounded-circle shadow-lg profile-pic">
                </div>
            </div>
        </div>
    </header>

    {{-- SKILLS --}}
    <section id="skills" class="section">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">{{ __('skills.title') }}</h2>
            <div class="row align-items-center hidden">
                <div class="col-md-6">
                    <div class="chart-box">
                        <canvas id="skillsChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="row g-4 text-center justify-content-center skills-grid">
                        <div class="col-6">
                            <div class="p-3 border rounded shadow-sm skill-box">
                                <i class="fa-brands fa-html5 fa-3x text-danger mb-3"></i>
                                <h5>HTML5</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded shadow-sm skill-box">
                                <i class="fa-brands fa-css3-alt fa-3x text-primary mb-3"></i>
                                <h5>CSS3</h5>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-6">
                            <div class="p-3 border rounded shadow-sm skill-box">
                                <i class="fa-brands fa-js fa-3x text-warning mb-3"></i>
                                <h5>JavaScript</h5>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-6">
                            <div class="p-3 border rounded shadow-sm skill-box">
                                <i class="fa-brands fa-php fa-3x mb-3" style="color: #777BB4;"></i>
                                <h5>PHP</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded shadow-sm skill-box">
                                <i class="fa-brands fa-bootstrap fa-3x mb-3" style="color: #7952B3;"></i>
                                <h5>Bootstrap</h5>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-6">
                            <div class="p-3 border rounded shadow-sm skill-box">
                                <i class="fa-brands fa-laravel fa-3x mb-3" style="color: #ff2d20;"></i>
                                <h5>Laravel</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded shadow-sm skill-box">
                                <i class="fa-solid fa-brain fa-3x mb-3 text-primary"></i>
                                <h5>AI</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CERTIFICAZIONI --}}
    <section id="certifications" class="section section-alt">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">{{ __('certs.title') }}</h2>
            <div class="row g-4 justify-content-center hidden">
                <div class="col-md-6 col-lg-4">
                    <div class="cert-card text-center h-100">
                        <img src="{{ asset('media/Aulab.png') }}" alt="Aulab" class="cert-logo mb-3">
                        <h5 class="fw-bold mb-1">{{ __('certs.aulab.title') }}</h5>
                        <p class="text-muted mb-0">{{ __('certs.aulab.desc') }}</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-outline-primary btn-sm disabled" aria-disabled="true">
                                {{ __('certs.download') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cert-card text-center h-100">
                        <img src="{{ asset('media/Aulab.png') }}" alt="Aulab" class="cert-logo mb-3">
                        <h5 class="fw-bold mb-1">{{ __('certs.react.title') }}</h5>
                        <p class="text-muted mb-0">{{ __('certs.react.desc') }}</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-outline-primary btn-sm disabled" aria-disabled="true">
                                {{ __('certs.download') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="section">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">{{ __('projects.title') }}</h2>
            <div class="row g-4 hidden">
                <div class="col-md-6 col-lg-4">
                    <article class="project-card">
                        <img src="{{ asset('media/TechZone.png') }}" alt="TechZone">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">{{ __('project.techzone.title') }}</h3>
                            <p class="text-muted mb-3">{{ __('project.techzone.desc') }}</p>
                            <a href="{{ route('projects.techzone') }}" class="btn btn-outline-primary btn-sm">{{ __('project.view') }}</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card">
                        <img src="{{ asset('media/Sito_d\'arte.png') }}" alt="Sito d'arte">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">{{ __('project.art.title') }}</h3>
                            <p class="text-muted mb-3">{{ __('project.art.desc') }}</p>
                            <a href="{{ route('projects.art') }}" class="btn btn-outline-primary btn-sm">{{ __('project.view') }}</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card">
                        <img src="{{ asset('media/progettoRED.png') }}" alt="Progetto RED">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">{{ __('project.red.title') }}</h3>
                            <p class="text-muted mb-3">{{ __('project.red.desc') }}</p>
                            <a href="{{ route('projects.red') }}" class="btn btn-outline-primary btn-sm">{{ __('project.view') }}</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOG --}}
    <section id="blog" class="section">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">{{ __('blog.home.title') }}</h2>
            <div class="row g-4 hidden">
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card">
                        <div class="blog-tag">UX</div>
                        <h3 class="h5 fw-bold">{{ __('blog.ux.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.ux.desc') }}</p>
                        <a href="{{ route('blog.ux') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card">
                        <div class="blog-tag">Frontend</div>
                        <h3 class="h5 fw-bold">{{ __('blog.react.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.react.desc') }}</p>
                        <a href="{{ route('blog.react') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card">
                        <div class="blog-tag">CSS</div>
                        <h3 class="h5 fw-bold">{{ __('blog.frameworks.title') }}</h3>
                        <p class="text-muted mb-3">{{ __('blog.frameworks.desc') }}</p>
                        <a href="{{ route('blog.frameworks') }}" class="btn btn-outline-primary btn-sm">{{ __('blog.read') }}</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="section section-alt">
        <div class="container" style="max-width: 600px;">
            <h2 class="text-center mb-4 fw-bold hidden">{{ __('contact.title') }}</h2>
            <form id="contact-form" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="visually-hidden">
                    <label for="honeypot">Non compilare questo campo se sei umano:</label>
                    <input type="text" id="honeypot" name="honeypot" tabindex="-1" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('contact.label_name') }}</label>
                    <input type="text" class="form-control" id="name" name="name" autocomplete="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('contact.label_email') }}</label>
                    <input type="email" class="form-control" id="email" name="email" required autocomplete="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">{{ __('contact.label_message') }}</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                </div>
                @if (config('services.recaptcha.site'))
                    <div class="mb-3 d-flex justify-content-center">
                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site') }}"></div>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary w-100">{{ __('contact.send') }}</button>
                @if ($errors->any())
                    <div class="mt-3 text-center fw-bold text-danger">
                        {{ __('contact.error') }}
                    </div>
                @endif
                @if ($errors->has('recaptcha'))
                    <div class="mt-3 text-center fw-bold text-danger">
                        {{ $errors->first('recaptcha') }}
                    </div>
                @endif
                @if (session('contact_success'))
                    <div class="mt-3 text-center fw-bold text-success">
                        {{ session('contact_success') }}
                    </div>
                @endif
            </form>
        </div>
    </section>

</x-layouts.app>

@push('scripts')
    @if (config('services.recaptcha.site'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
@endpush
