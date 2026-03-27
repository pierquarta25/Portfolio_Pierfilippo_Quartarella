<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Data ultimo commit Git (fallback a null se non disponibile)
        $lastCommitIso = trim((string) shell_exec('git log -1 --format=%cI 2>/dev/null'));
        $lastUpdated = null;

        if ($lastCommitIso !== '') {
            $lastUpdated = Carbon::parse($lastCommitIso)
                ->timezone(config('app.timezone'))
                ->format('d/m/Y');
        }

        View::share('git_last_updated', $lastUpdated);

        // Rate limit per il form contatti (anti-spam semplice)
        RateLimiter::for('contact', function (Request $request) {
            return Limit::perMinute(3)->by($request->ip());
        });
    }
}
