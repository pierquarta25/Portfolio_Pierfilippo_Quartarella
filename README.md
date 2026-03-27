# 👨‍💻 Portfolio Personale - Pierfilippo Quartarella

![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![Laravel](https://img.shields.io/badge/Laravel-13-red.svg?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.3+-777BB4?logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?logo=tailwind-css&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-green.svg)

> **Portfolio dinamico e moderno** sviluppato con Laravel per mostrare progetti, competenze e percorso professionale. Combina design responsivo, funzionalità backend robuste e un'esperienza utente fluida.

---

## 🌟 Panoramica e Caratteristiche

Questo progetto è una dimostrazione completa di competenze Full Stack, utilizzando Laravel come framework backend e un frontend moderno con Tailwind CSS e Bootstrap.

### Frontend Engineering
*   **UI/UX Moderna:** Design responsivo con **Tailwind CSS 4** e **Bootstrap 5**, effetti glassmorphism, animazioni 3D e transizioni fluide.
*   **Internazionalizzazione (i18n):** Sistema di traduzione completo con supporto per Italiano e Inglese, persistenza delle preferenze.
*   **Dark Mode:** Gestione automatica del tema basata sulle preferenze di sistema e toggle manuale.
*   **Ottimizzazioni Performance:** Lazy loading, preloader e animazioni al viewport per un'esperienza utente ottimale.

### Backend & Sicurezza
*   **Laravel Framework:** Architettura MVC robusta con Eloquent ORM per la gestione dei dati.
*   **Livewire:** Componenti interattivi per funzionalità dinamiche senza JavaScript pesante.
*   **Sistema Contatti:** Form di contatto con validazione, protezione anti-spam (honeypot e reCAPTCHA opzionale), salvataggio in database e invio email.
*   **GDPR Compliance:** Gestione granulare dei cookie con blocco preventivo degli script di tracciamento.

### Contenuti
*   **Sezioni Portfolio:** Home, Chi Sono, Progetti (con pagine dedicate), Blog con articoli tecnici.
*   **Progetti Showcase:** Presentazione di progetti reali come TechZone, Sito Arte, Progetto Red.
*   **Blog Tecnico:** Articoli su UX Design, React 2026, Bootstrap vs Tailwind.

## 🛠 Tech Stack

| Area | Tecnologie |
| :--- | :--- |
| **Backend** | Laravel 13, PHP 8.3+, Livewire 3 |
| **Database** | SQLite/MySQL (configurabile) |
| **Frontend** | HTML5, Tailwind CSS 4, Bootstrap 5, JavaScript (ES6+) |
| **Build Tool** | Vite 8, Laravel Vite Plugin |
| **Assets** | FontAwesome 7, Axios, Google Fonts (Outfit) |
| **Testing** | PHPUnit, Laravel Pint |
| **Tools** | Composer, NPM, Git |

## 📸 Screenshots

![Navigazione Progetto](media/navigazione_progetto.png)

---

## ⚙️ Installazione e Setup Locale

### Prerequisiti
*   PHP 8.3 o superiore
*   Composer
*   Node.js e NPM
*   Database SQLite o MySQL (opzionale, SQLite preconfigurato)

### 1. Clonazione del Repository
```bash
git clone https://github.com/pierquarta25/portfolio-laravel.git
cd portfolio-laravel
```

### 2. Installazione Dipendenze
```bash
composer install
npm install
```

### 3. Configurazione Ambiente
Copia il file di esempio dell'ambiente:
```bash
cp .env.example .env
```

Genera la chiave dell'applicazione:
```bash
php artisan key:generate
```

### 4. Configurazione Database
Per SQLite (predefinito):
```bash
touch database/database.sqlite
```

Per MySQL, modifica `.env` con le tue credenziali.

Esegui le migrazioni:
```bash
php artisan migrate
```

### 5. Build Assets
```bash
npm run build
# oppure per sviluppo:
npm run dev
```

### 6. Avvio Applicazione
```bash
php artisan serve
```

Visita `http://localhost:8000` nel browser.

### Script di Setup Automatico
Il progetto include uno script Composer per setup completo:
```bash
composer run setup
```

### Ambiente di Sviluppo
Per sviluppo con hot reload e tutti i servizi:
```bash
composer run dev
```

Questo avvia contemporaneamente: server Laravel, queue worker, logs e Vite dev server.

## 📂 Struttura del Progetto

```
portfolio-laravel/
├── app/                          # Codice applicativo Laravel
│   ├── Http/Controllers/         # Controller (ContactController)
│   ├── Livewire/                 # Componenti Livewire (Navbar)
│   ├── Mail/                     # Template email (ContactMessageMail)
│   └── Models/                   # Modelli Eloquent (User, ContactMessage)
├── database/                     # Migrazioni e seeders
├── public/                       # Asset pubblici e build
├── resources/                    # Risorse frontend
│   ├── css/                      # Stili CSS
│   ├── js/                       # JavaScript
│   └── views/                    # Template Blade
├── routes/                       # Definizioni route
├── lang/                         # File traduzione (IT/EN)
├── tests/                        # Test PHPUnit
├── ANALISI_PORTFOLIO.md          # Documentazione tecnica
└── README.md                     # Questo file
```

## 🧪 Testing

Esegui i test con PHPUnit:
```bash
php artisan test
```

## 📧 Configurazione Email

Per abilitare l'invio email dal form contatti, configura le impostazioni SMTP in `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@tuosito.com"
MAIL_FROM_NAME="${APP_NAME}"
MAIL_CONTACT_RECEIVER="tuaemail@esempio.com"
```

## 🔒 Sicurezza e Privacy

*   **Anti-Spam:** Honeypot technique per bloccare bot automaticamente
*   **reCAPTCHA:** Supporto opzionale per Google reCAPTCHA v2
*   **GDPR:** Gestione cookie con consenso granulare
*   **Input Validation:** Validazione lato server completa
*   **CSRF Protection:** Protezione automatica Laravel

## 🌍 Internazionalizzazione

Il sito supporta due lingue:
*   Italiano (predefinito)
*   Inglese

Le traduzioni sono gestite tramite file JSON in `lang/`.

## 📈 Roadmap e Miglioramenti Futuri

- [ ] **Pannello Amministrazione:** Sistema per gestire contenuti dinamicamente
- [ ] **API REST:** Endpoint per integrazione con altri servizi
- [ ] **Ottimizzazioni SEO:** Meta tag dinamici e sitemap
- [ ] **PWA Features:** Service worker e manifest per app mobile
- [ ] **Analytics Avanzati:** Integrazione con strumenti di analisi

## 📄 Licenza

Questo progetto è distribuito sotto licenza MIT. Vedi il file `LICENSE` per dettagli.

## 👤 Autore

**Pierfilippo Quartarella**
- Portfolio: [pierquarta25.github.io](https://pierquarta25.github.io)
- LinkedIn: [Pierfilippo Quartarella](https://linkedin.com/in/pierfilippo-quartarella)
- Email: pier.quarta25@icloud.com

---

## 📄 Licenza

Distribuito sotto licenza MIT. Vedi `LICENSE` per maggiori informazioni.

---
© 2026 Pierfilippo Quartarella
----