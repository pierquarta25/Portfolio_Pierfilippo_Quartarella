<div class="contact-card hidden">
    <h3 class="h5 fw-bold mb-3">{{ __('contact.form.title') }}</h3>
    <p class="text-muted mb-4">{{ __('contact.form.desc') }}</p>

    <form wire:submit="submit">
        {{-- Honeypot --}}
        <div class="visually-hidden">
            <label for="honeypot">Non compilare questo campo se sei umano:</label>
            <input type="text" id="honeypot" wire:model="honeypot" tabindex="-1" autocomplete="off">
        </div>

        {{-- Name Field --}}
        <div class="mb-3">
            <label for="contact-name" class="form-label">{{ __('contact.label_name') }}</label>
            <input 
                type="text" 
                class="form-control @error('name') is-invalid @enderror" 
                id="contact-name" 
                wire:model="name"
                wire:blur="updated('name')"
                autocomplete="name"
                placeholder="Il tuo nome"
            >
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email Field --}}
        <div class="mb-3">
            <label for="contact-email" class="form-label">{{ __('contact.label_email') }}</label>
            <input 
                type="email" 
                class="form-control @error('email') is-invalid @enderror" 
                id="contact-email" 
                wire:model="email"
                wire:blur="updated('email')"
                autocomplete="email"
                placeholder="tua.email@esempio.com"
            >
            @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Message Field --}}
        <div class="mb-3">
            <label for="contact-message" class="form-label">
                {{ __('contact.label_message') }}
                <small class="text-muted">({{ strlen($message) }}/2000)</small>
            </label>
            <textarea 
                class="form-control @error('message') is-invalid @enderror" 
                id="contact-message" 
                wire:model="message"
                wire:blur="updated('message')"
                rows="4"
                placeholder="Scrivi il tuo messaggio qui..."
                maxlength="2000"
            ></textarea>
            @error('message')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- ReCAPTCHA --}}
        @if (config('services.recaptcha.site'))
            <div class="mb-3 d-flex justify-content-center">
                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site') }}"></div>
            </div>
        @endif

        {{-- Submit Button --}}
        <button 
            type="submit" 
            class="btn btn-primary w-100"
            wire:loading.attr="disabled"
        >
            <span wire:loading.remove>{{ __('contact.send') }}</span>
            <span wire:loading>
                <i class="fa-solid fa-spinner fa-spin me-2"></i>Invio in corso...
            </span>
        </button>

        {{-- Success Message --}}
        @if ($submitted && $successMessage)
            <div class="form-alert success mt-3 text-center fw-bold" wire:transition>
                {{ $successMessage }}
            </div>
        @endif

        {{-- Error Message --}}
        @if ($errors->count() > 0 && !empty($errors->first('general')))
            <div class="form-alert error mt-3 text-center fw-bold">
                {{ $errors->first('general') }}
            </div>
        @endif
    </form>
</div>

@script
<script>
    $wire.on('hideSuccessAfterDelay', () => {
        setTimeout(() => {
            const alert = document.querySelector('.form-alert.success');
            if (alert) {
                alert.style.transition = 'opacity 0.5s ease-out';
                alert.style.opacity = '0';
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 500);
            }
        }, 3000);
    });

    // Optional: Auto-reset form after success
    $wire.on('formSubmitted', () => {
        // Form già resettato dal component
    });
</script>
@endscript
