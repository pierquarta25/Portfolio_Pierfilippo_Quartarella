<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        // Aggiungo il mio middleware al gruppo 'web'
        // così viene eseguito ad ogni visita del sito
        $middleware->web(append: [
            \App\Http\Middleware\SetLocaleFromSession::class,
        ]);

        $middleware->alias([
            'admin.basic' => \App\Http\Middleware\BasicAdminAuth::class,
            'admin' => \App\Http\Middleware\IsAdmin::class, // Nuovo middleware per admin autenticati
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
