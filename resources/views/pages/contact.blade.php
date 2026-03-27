<x-layouts.app>

    {{-- Header pagina --}}
    <header class="page-header">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">{{ __('contact.title') }}</h1>
            <p class="lead text-muted mb-0">{{ __('contact.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Contenuto --}}
    <section class="section">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <div class="contact-card hidden">
                        <h3 class="h5 fw-bold mb-3">{{ __('contact.form.title') }}</h3>
                        <p class="text-muted mb-4">{{ __('contact.form.desc') }}</p>

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="visually-hidden">
                                <label for="honeypot">Non compilare questo campo se sei umano:</label>
                                <input type="text" id="honeypot" name="honeypot" tabindex="-1" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="contact-name" class="form-label">{{ __('contact.label_name') }}</label>
                                <input type="text" class="form-control" id="contact-name" name="name" autocomplete="name" value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="contact-email" class="form-label">{{ __('contact.label_email') }}</label>
                                <input type="email" class="form-control" id="contact-email" name="email" required autocomplete="email" value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label for="contact-message" class="form-label">{{ __('contact.label_message') }}</label>
                                <textarea class="form-control" id="contact-message" name="message" rows="4" required>{{ old('message') }}</textarea>
                            </div>
                            @if (config('services.recaptcha.site'))
                                <div class="mb-3 d-flex justify-content-center">
                                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site') }}"></div>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-primary w-100">{{ __('contact.send') }}</button>

                            @if ($errors->any())
                                <div class="form-alert error mt-3 text-center fw-bold">
                                    {{ __('contact.error') }}
                                </div>
                            @endif
                            @if ($errors->has('recaptcha'))
                                <div class="form-alert error mt-3 text-center fw-bold">
                                    {{ $errors->first('recaptcha') }}
                                </div>
                            @endif
                            @if (session('contact_success'))
                                <div class="form-alert success mt-3 text-center fw-bold">
                                    {{ session('contact_success') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info hidden">
                        <div class="info-row">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <p class="mb-0 fw-semibold">Email</p>
                                <a href="mailto:pier.quarta25@icloud.com">pier.quarta25@icloud.com</a>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <p class="mb-0 fw-semibold">Base</p>
                                <span>Italia</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-briefcase"></i>
                            <div>
                                <p class="mb-0 fw-semibold">Disponibilità</p>
                                <span>Freelance e collaborazioni</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <div>
                                <p class="mb-0 fw-semibold">CV</p>
                                <a href="{{ asset('media/Pierfilippo_Quartarella_CV.pdf') }}" download>
                                    Scarica il CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>

@push('scripts')
    @if (config('services.recaptcha.site'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
@endpush
