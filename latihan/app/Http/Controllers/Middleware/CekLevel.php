<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekLevel
{
    public function handle($request, Closure $next, ...$levels)
    {
        if (!Auth::check() || !in_array(Auth::user()->level, $levels)) {
            abort(403, 'Unauthorized');
        }
        return $next($request);
    }
}