<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    // La lingua attiva (es: 'it' oppure 'en')
    public string $lingua;

    /**
     * mount() viene chiamato una volta sola quando il componente nasce.
     * Leggo la lingua dalla sessione — la stessa che il middleware ha impostato.
     */
    public function mount(): void
    {
        $this->lingua = session('locale', 'it');
    }

    /**
     * Quando l'utente clicca il bottone lingua, faccio il toggle IT <-> EN,
     * salvo in sessione e ricarico la pagina.
     * Ricarico tutta la pagina (non solo la navbar) perché anche
     * Hero, Progetti e Blog devono aggiornarsi con la nuova lingua.
     */
    public function cambia_lingua(): void
    {
        $nuova_lingua = $this->lingua === 'it' ? 'en' : 'it';

        session(['locale' => $nuova_lingua]);

        // Ricarico la stessa pagina in cui mi trovo
        $this->redirect(request()->header('Referer', '/'));
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}