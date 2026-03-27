<footer class="text-white text-center custom-footer">
    {{-- Onda SVG --}}
    <div class="footer-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#212529" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    {{-- Contenuto Footer --}}
    <div class="footer-content py-4">
        <p class="mb-0">
            &copy; <span id="current-year">2026</span> Pierfilippo Quartarella.
            <span>{{ __('footer.rights') }}</span>
        </p>
        <p class="mb-0 small" style="opacity: 0.6; font-size: 0.8rem;">
            {{ __('footer.updated') }}: <span>{{ $git_last_updated ?? '—' }}</span>
        </p>
        <div class="mt-2 social-icons">
            <a href="https://www.linkedin.com/in/pier-quartarella/" target="_blank" class="text-white me-3">
                <i class="fa-brands fa-linkedin fa-lg"></i>
            </a>
            <a href="https://github.com/pierquarta25" target="_blank" class="text-white">
                <i class="fa-brands fa-github fa-lg"></i>
            </a>
        </div>
    </div>
</footer>
