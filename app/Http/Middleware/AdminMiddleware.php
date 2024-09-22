<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Proverava da li je korisnik ulogovan i da li je admin
        if (Auth::check() && Auth::user()->tip === 'admin') {
            return $next($request);
        }

        // Ako nije admin, preusmeri ili vrati grešku
        return redirect('/')->with('error', 'Nemaš pristup ovoj stranici.');
    }
}
