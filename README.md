# 👨‍💻 Portfolio Personale - Pierfilippo Quartarella

![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-green.svg)

> **Web Application dinamica** sviluppata per mostrare progetti, competenze e percorso professionale. Un mix di design moderno e logica backend funzionale.

---

## ✅ Versione Laravel

La migrazione completa in Laravel è in `portfolio-laravel/`.  
Per avviare la nuova versione:

```bash
cd portfolio-laravel
npm install
npm run dev
php artisan serve
```

---

## 🌟 Overview & Features

Questo progetto non è solo una vetrina statica, ma una dimostrazione di competenze Full Stack.

### Frontend Engineering
*   **UI/UX Avanzata:** Design responsivo basato su **Bootstrap 5** con personalizzazioni CSS3 (Glassmorphism, Parallasse, 3D Flip Cards).
*   **Internationalization (i18n):** Sistema custom JS per il cambio lingua (IT/EN) istantaneo con persistenza via `localStorage`.
*   **Dark Mode:** Gestione tema automatica (preferenze di sistema) e manuale.
*   **Performance:** Lazy loading delle risorse e Preloader per un'esperienza fluida.

### Backend & Security
*   **PHP Mailer:** Gestione server-side del modulo contatti (no servizi terzi).
*   **Anti-Spam:** Implementazione tecnica **Honeypot** per bloccare i bot senza CAPTCHA invasivi.
*   **GDPR Compliance:** Sistema di gestione cookie granulare con blocco preventivo degli script di tracciamento (Google Analytics) prima del consenso.

## 🛠 Tech Stack

| Area | Tecnologie |
| :--- | :--- |
| **Frontend** | HTML5, CSS3, JavaScript (ES6+), Bootstrap 5 |
| **Backend** | PHP 8+ (Native) |
| **Assets** | FontAwesome 6, Canvas Confetti, Google Fonts (Outfit) |
| **Tools** | Git, VS Code, XAMPP/MAMP |

## 📸 Screenshots

![alt text](media/navigazione_progetto.png)

---

## ⚙️ Installazione e Setup Locale

Il progetto richiede un ambiente server PHP per gestire le funzionalità di backend (API contatti).

### 1. Prerequisiti
*   PHP installato (o ambiente come XAMPP/MAMP/Laragon).
*   Git.

### 2. Clonazione
```bash
git clone https://github.com/pierquarta25
cd portfolio
```

### 3. Configurazione Backend
Per abilitare l'invio reale delle email, modificare il file `api/contact.php`:

```php
// api/contact.php
$to = "pier.quarta25@icloud.com"; 
```

### 4. Avvio Server

**Opzione A: PHP Built-in Server (Consigliato)**
Esegui questo comando dalla root del progetto:
```bash
php -S localhost:8000
```
Visita: `http://localhost:8000/views/index.html`

**Opzione B: XAMPP/MAMP**
Sposta la cartella in `htdocs` e avvia Apache.

## 📂 Struttura del Progetto

```text
portfolio/
├── api/              # Endpoint Backend (contact.php)
├── media/            # Immagini, documenti e favicon
├── resources/        # Asset statici (CSS, JS Main Logic)
├── views/            # Pagine Frontend (HTML/PHP)
│   └── partials/     # Componenti riutilizzabili (se in uso)
├── ANALISI_PORTFOLIO.md # Documentazione tecnica dettagliata
└── README.md         # Questo file
```

## 📄 Licenza

Distribuito sotto licenza MIT. Vedi `LICENSE` per maggiori informazioni.

---
© 2026 Pierfilippo Quartarella
----