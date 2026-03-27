<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocaleFromSession
{
    /**
     * Leggo la lingua preferita dall'utente dalla sessione e
     * la applico all'intera request. Così __() e trans() la usano
     * automaticamente in ogni Blade e Livewire della pagina.
     */
    public function handle(Request $request, Closure $next)
    {
        $supportedLocales = ['it', 'en'];
        $locale = session('locale', config('app.locale')); // Default: 'it'

        // Accetto solo lingue supportate per evitare input arbitrari
        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}