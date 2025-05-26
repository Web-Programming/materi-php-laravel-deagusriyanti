<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|array  $levels
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Anda harus login terlebih dahulu');
        }

        $user = Auth::user();

        // Cek apakah level user ada di dalam parameter $levels
        if (!in_array($user->level, $levels)) {
            // Jika tidak sesuai level, redirect atau tampilkan pesan error
            return redirect('/home')->with('error', 'Anda tidak memiliki akses ke halaman ini');
        }

        return $next($request);
    }
}
