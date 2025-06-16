<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HideAdminName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna saat ini adalah admin
        if (Auth::check() && Auth::user()->role == 'admin') {
            // Jika ya, hapus nama dari response
            $response = $next($request);
            $content = $response->getContent();

            // Misalnya, mengganti semua kemunculan nama dengan string kosong
            $content = str_replace(Auth::user()->name, '', $content);

            $response->setContent($content);

            return $response;
        }

        return $next($request);
    }
}
