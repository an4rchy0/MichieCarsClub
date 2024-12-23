<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsAuth
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
        if (!Auth::check()) {
            // Memeriksa rute yang sedang diakses
            if ($request->is('loginus')) {
                return redirect()->route('loginus');
            } else {
                return redirect()->route('loginus');
            }
        }

        return $next($request);
    }
}
