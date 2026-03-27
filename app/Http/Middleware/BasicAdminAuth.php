<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = env('ADMIN_USER');
        $pass = env('ADMIN_PASS');

        if (!$user || !$pass) {
            return $next($request);
        }

        $header = $request->header('Authorization');
        if ($header && str_starts_with($header, 'Basic ')) {
            $decoded = base64_decode(substr($header, 6)) ?: '';
            [$u, $p] = array_pad(explode(':', $decoded, 2), 2, null);

            if ($u === $user && $p === $pass) {
                return $next($request);
            }
        }

        return response('Unauthorized', 401, ['WWW-Authenticate' => 'Basic realm="Admin"']);
    }
}
