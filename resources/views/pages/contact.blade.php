<x-layouts.app>

    {{-- Header pagina --}}
    {{-- Header con stile tech --}}
    <header class="page-header contact-hero">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size: clamp(1.75rem, 5vw, 3.5rem);">{{ __('contact.title') }}</h1>
            <p class="lead text-muted mb-0">{{ __('contact.page.subtitle') }}</p>
        </div>
    </header>

    {{-- Contenuto --}}
    {{-- Sezione contatti stile tech --}}
    <section class="section contact-tech">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    @livewire('contact-form')
                </div>
                <div class="col-lg-5">
                    <div class="contact-info reveal contact-info--tech">
                        <div class="info-row">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <p class="mb-0 fw-semibold">{{ __('contact.info.email_label') }}</p>
                                <a href="mailto:pier.quarta25@icloud.com">pier.quarta25@icloud.com</a>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <p class="mb-0 fw-semibold">{{ __('contact.info.base_label') }}</p>
                                <span>{{ __('contact.info.base_value') }}</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-briefcase"></i>
                            <div>
                                <p class="mb-0 fw-semibold">{{ __('contact.info.availability_label') }}</p>
                                <span>{{ __('contact.info.availability_value') }}</span>
                            </div>
                        </div>
                        <div class="info-row">
                            <i class="fa-solid fa-file-arrow-down"></i>
                            <div>
                                <p class="mb-0 fw-semibold">{{ __('contact.info.cv_label') }}</p>
                                <a href="{{ asset('media/Pierfilippo_Quartarella_CV.pdf') }}" download>
                                    {{ __('contact.info.cv_download') }}
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
    
    <script>
        // Auto-hide success messages after 3 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const successAlerts = document.querySelectorAll('.form-alert.success');
            successAlerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.5s ease-out';
                    alert.style.opacity = '0';
                    setTimeout(() => {
                        alert.style.display = 'none';
                    }, 500);
                }, 3000);
            });
        });
    </script>
@endpush
