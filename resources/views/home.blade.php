<x-layouts.app>

    {{-- HERO --}}
    <header id="hero" class="hero-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold">
                        Ciao, sono <span class="gradient-text">Pierfilippo</span>
                    </h1>
                    <h2 class="h4 text-primary mb-4">Junior Full Stack Developer</h2>
                    <p class="lead text-secondary">
                        Dal mondo dello sport al codice. Porto disciplina, costanza e problem solving nello sviluppo web.
                    </p>
                    <div class="mt-4">
                        <a href="#projects" class="btn btn-primary btn-lg me-2 mb-2">Vedi i miei lavori</a>
                        <a href="{{ asset('media/Pierfilippo_Quartarella_CV.pdf') }}" download class="btn btn-outline-primary btn-lg mb-2">
                            <i class="fa-solid fa-download me-2"></i>Scarica CV
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
            <h2 class="text-center mb-5 fw-bold">Le mie Competenze</h2>
            <div class="row align-items-center hidden">
                <div class="col-md-6">
                    <div class="chart-box">
                        <canvas id="skillsChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="row g-4 text-center justify-content-center">
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
            <h2 class="text-center mb-5 fw-bold">Certificazioni</h2>
            <div class="row g-4 justify-content-center hidden">
                <div class="col-md-6 col-lg-4">
                    <div class="cert-card text-center h-100">
                        <img src="{{ asset('media/Aulab.png') }}" alt="Aulab" class="cert-logo mb-3">
                        <h5 class="fw-bold mb-1">Aulab Full Stack</h5>
                        <p class="text-muted mb-0">Percorso completo di sviluppo web</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-outline-primary btn-sm disabled" aria-disabled="true">
                                Scarica certificazione
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cert-card text-center h-100">
                        <img src="{{ asset('media/Aulab.png') }}" alt="Aulab" class="cert-logo mb-3">
                        <h5 class="fw-bold mb-1">Specializzazione ReactJS</h5>
                        <p class="text-muted mb-0">Componenti, hooks e architetture moderne</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-outline-primary btn-sm disabled" aria-disabled="true">
                                Scarica certificazione
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
            <h2 class="text-center mb-5 fw-bold">I miei Progetti</h2>
            <div class="row g-4 hidden">
                <div class="col-md-6 col-lg-4">
                    <article class="project-card">
                        <img src="{{ asset('media/TechZone.png') }}" alt="TechZone">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">TechZone</h3>
                            <p class="text-muted mb-3">Landing moderna per prodotti tech con CTA chiare.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card">
                        <img src="{{ asset('media/Sito_d\'arte.png') }}" alt="Sito d'arte">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">Sito d'Arte</h3>
                            <p class="text-muted mb-3">Esperienza visiva elegante per portfolio artistico.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="project-card">
                        <img src="{{ asset('media/progettoRED.png') }}" alt="Progetto RED">
                        <div class="project-body">
                            <h3 class="h5 fw-bold mb-2">Progetto RED</h3>
                            <p class="text-muted mb-3">Layout ad alto impatto con palette dinamica.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOG --}}
    <section id="blog" class="section">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Ultime dal Blog</h2>
            <div class="row g-4 hidden">
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card">
                        <div class="blog-tag">UX</div>
                        <h3 class="h5 fw-bold">L'importanza della UX nel Web Design</h3>
                        <p class="text-muted mb-3">Perché la UX non è estetica, ma performance e fiducia.</p>
                        <a href="{{ route('blog.ux') }}" class="btn btn-outline-primary btn-sm">Leggi articolo</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card">
                        <div class="blog-tag">Frontend</div>
                        <h3 class="h5 fw-bold">Come imparare React nel 2026</h3>
                        <p class="text-muted mb-3">RSC, Server Actions e best practice moderne.</p>
                        <a href="{{ route('blog.react') }}" class="btn btn-outline-primary btn-sm">Leggi articolo</a>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card">
                        <div class="blog-tag">CSS</div>
                        <h3 class="h5 fw-bold">Bootstrap 5 vs Tailwind CSS</h3>
                        <p class="text-muted mb-3">Confronto diretto per scegliere lo stack giusto.</p>
                        <a href="{{ route('blog.frameworks') }}" class="btn btn-outline-primary btn-sm">Leggi articolo</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="section section-alt">
        <div class="container" style="max-width: 600px;">
            <h2 class="text-center mb-4 fw-bold hidden">Contattami</h2>
            <form id="contact-form">
                <div class="visually-hidden">
                    <label for="honeypot">Non compilare questo campo se sei umano:</label>
                    <input type="text" id="honeypot" name="honeypot" tabindex="-1" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">La tua Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autocomplete="email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Messaggio</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Invia Messaggio</button>
                <div id="form-status" class="mt-3 text-center fw-bold" aria-live="polite"></div>
            </form>
        </div>
    </section>

</x-layouts.app>
