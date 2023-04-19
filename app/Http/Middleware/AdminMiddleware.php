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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if (auth()->check() && auth()->Auth::user()->isAdmin()) {
    //         return $next($request);
    //     }

    //     return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
    // }

    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            // Jika pengguna tidak sedang masuk
            return redirect('/login');
        }

        if (!Auth::user()->isAdmin()) {
            // Jika pengguna sedang masuk tetapi tidak memiliki akses sebagai admin
            return redirect('/');
        }

        return $next($request);
    }
}
