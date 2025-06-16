<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MahasiswaMiddleware
{
    public function handle($request, Closure $next)
{
    if (Auth::user()->role == 'admin') {
        return redirect('/home');
    }
    return $next($request);

}
}