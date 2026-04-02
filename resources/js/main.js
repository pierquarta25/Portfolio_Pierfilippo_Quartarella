document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', function () {
    // =========================================================
    // PRELOADER
    // =========================================================
    const preloader = document.getElementById('preloader');
    window.addEventListener('load', function () {
        if (!preloader) return;
        preloader.classList.add('fade-out');
        setTimeout(function () {
            preloader.remove();
        }, 500);
    });

    // =========================================================
    // NAVBAR SCROLL EFFECT
    // =========================================================
    const navbar = document.getElementById('mainNavbar');
    window.addEventListener('scroll', function () {
        if (!navbar) return;
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled', 'navbar-dark');
            navbar.classList.remove('navbar-light');
        } else {
            navbar.classList.remove('navbar-scrolled', 'navbar-dark');
            navbar.classList.add('navbar-light');
        }
    }, { passive: true });

    // =========================================================
    // DARK MODE TOGGLE (classe su <html>)
    // =========================================================
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeIcon = themeToggleBtn ? themeToggleBtn.querySelector('i') : null;

    function updateThemeIcon(isDark) {
        if (!themeIcon) return;
        themeIcon.classList.toggle('fa-sun', isDark);
        themeIcon.classList.toggle('fa-moon', !isDark);
    }

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.documentElement.classList.add('dark-mode');
        updateThemeIcon(true);
    } else {
        updateThemeIcon(false);
    }

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', function () {
            const isDark = document.documentElement.classList.toggle('dark-mode');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateThemeIcon(isDark);
        });
    }

    // =========================================================
    // SCROLL REVEAL
    // =========================================================
    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    });

    document.querySelectorAll('.reveal').forEach(function (el) {
        observer.observe(el);
    });

    // =========================================================
    // BACK TO TOP
    // =========================================================
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        backToTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // =========================================================
    // BOOTSTRAP TOOLTIP
    // =========================================================
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (el) {
        new bootstrap.Tooltip(el);
    });

    // =========================================================
    // SKILLS CHART (Chart.js)
    // =========================================================
    const skillsCanvas = document.getElementById('skillsChart');
    if (skillsCanvas && typeof window.Chart !== 'undefined') {
        new Chart(skillsCanvas, {
            type: 'radar',
            data: {
                labels: ['HTML', 'CSS', 'JS', 'PHP', 'Bootstrap', 'Laravel', 'AI'],
                datasets: [{
                    label: 'Skill Level',
                    data: [95, 95, 92, 70, 95, 90, 70],
                    fill: true,
                    backgroundColor: 'rgba(2, 28, 68, 0.2)',
                    borderColor: 'rgba(2, 28, 68, 0.8)',
                    pointBackgroundColor: 'rgba(2, 28, 68, 1)'
                }]
            },
            options: {
                plugins: { legend: { display: false } },
                scales: {
                    r: {
                        beginAtZero: true,
                        suggestedMin: 0,
                        suggestedMax: 100,
                        ticks: { display: true, stepSize: 20 }
                    }
                }
            }
        });
    }

    // =========================================================
    // COOKIE BANNER (semplice)
    // =========================================================
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieAccept = document.getElementById('cookie-accept');
    const cookieReject = document.getElementById('cookie-reject');

    if (cookieBanner) {
        const choice = localStorage.getItem('cookie-consent');
        if (!choice) cookieBanner.classList.remove('d-none');

        if (cookieAccept) {
            cookieAccept.addEventListener('click', function () {
                localStorage.setItem('cookie-consent', 'accepted');
                cookieBanner.classList.add('d-none');
            });
        }

        if (cookieReject) {
            cookieReject.addEventListener('click', function () {
                localStorage.setItem('cookie-consent', 'rejected');
                cookieBanner.classList.add('d-none');
            });
        }
    }
});
