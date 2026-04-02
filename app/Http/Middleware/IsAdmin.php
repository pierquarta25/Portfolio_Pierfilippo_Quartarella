<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se l'utente è autenticato e ha il flag admin
        if (!auth()->check() || !auth()->user()->is_admin) {
            // Reindirizza alla home con messaggio di errore
            return redirect('/')->with('error', 'Accesso negato. Solo amministratori possono accedere a questa sezione.');
        }

        return $next($request);
    }
}
