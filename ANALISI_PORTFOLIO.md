# 📘 Documentazione Tecnica & Architettura

> **Autore:** Pierfilippo Quartarella
> **Tipo:** Technical Case Study

Questo documento analizza le scelte architetturali, le sfide tecniche affrontate e le soluzioni implementate nello sviluppo del Portfolio.

---

## 1. Architettura del Software

Il progetto segue un approccio **Separation of Concerns (SoC)**, mantenendo distinte la struttura, lo stile e la logica.

### Frontend (Vanilla JS & Bootstrap)
Nonostante l'assenza di framework reattivi (React/Vue), è stato implementato un sistema di **State Management leggero** tramite JavaScript Vanilla per gestire:
*   **i18n (Internazionalizzazione):** Un dizionario oggetti JSON gestisce le traduzioni. Il rendering del DOM è reattivo al cambio di stato della lingua.
*   **DOM Injection:** I componenti ripetitivi (Card Progetti, Testimonianze) sono generati via JS, simulando un approccio a componenti.
*   **Persistenza:** Utilizzo di `localStorage` per mantenere le preferenze utente (Tema, Lingua) tra le sessioni.

### Backend (PHP Native)
L'API è disaccoppiata dal frontend.
*   **Endpoint:** `api/contact.php` funge da endpoint RESTful che accetta JSON e risponde in JSON.
*   **Sicurezza:**
    *   **Input Sanitization:** Utilizzo di `filter_var` e `htmlspecialchars` per prevenire XSS e Injection.
    *   **Honeypot Strategy:** Un campo nascosto (`honeypot`) intercetta i bot che compilano automaticamente i form, bloccando lo spam senza degradare la UX con CAPTCHA.

---

## 2. UX/UI & Performance

### Design System
*   **Glassmorphism:** Utilizzo di sfocature (`backdrop-filter`) sulla navbar e menu mobile per modernità e contesto visivo.
*   **Interattività 3D:** Le card dei progetti utilizzano `transform: rotateY(180deg)` e `perspective` CSS per un effetto flip realistico.
*   **Typography Effects:** Utilizzo di gradienti animati (`background-clip: text`) per il personal branding, garantendo impatto visivo senza compromettere la leggibilità.
*   **Accessibilità:** Contrasto colori verificato, supporto semantico HTML5 e gestione feedback form tramite regioni `aria-live` per screen reader.
*   **Form UX:** Reset automatico dei campi (Email/Messaggio) post-invio per feedback visivo immediato di "azione completata" e prevenzione di invii duplicati.
*   **Micro-interactions:** Feedback visivo di successo (Confetti) personalizzato con colore brand `#021c44` e z-index elevato per garantire visibilità.

### Ottimizzazione
*   **Lazy Loading:** Implementato nativamente e tramite logica JS per elementi non critici.
*   **Intersection Observer API:** Utilizzata per animare gli elementi solo quando entrano nel viewport, riducendo il carico iniziale del browser rispetto ai listener `scroll` tradizionali.

---

## 3. GDPR & Privacy Engineering

La conformità al GDPR è stata integrata a livello di codice, non come plugin esterno.

1.  **Blocco Preventivo:** Gli script di Google Analytics sono presenti nel codice ma non vengono eseguiti/iniettati nel DOM finché non viene rilevato il consenso esplicito.
2.  **Granularità:** Il sistema è predisposto per accettare diversi livelli di consenso (attualmente implementato: Analytics).
3.  **Trasparenza:** Banner informativo chiaro con link alla policy.

---

## 4. Roadmap & Miglioramenti Futuri

Piani per l'evoluzione del repository:

- [ ] **Refactoring MVC:** Migrare la struttura PHP verso un pattern MVC più rigoroso o un micro-framework (es. Slim/Laravel).
- [ ] **Database:** Sostituire gli array statici JS/PHP con un database MySQL/SQLite per gestire progetti e blog post.
- [ ] **Headless CMS:** Implementare un pannello di amministrazione per caricare nuovi contenuti senza toccare il codice.
- [ ] **Testing:** Aggiungere Unit Test (PHPUnit) per il backend e E2E testing (Cypress) per il frontend.
