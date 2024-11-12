<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Checklevel
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            // Periksa apakah pengguna memiliki peran yang sesuai
            if (Auth::user()->role !== $role) {
                // Jika tidak memiliki akses, bisa redirect atau tampilkan pesan error
                return redirect('/home')->with('error', 'Akses ditolak');
            }
        }

        // Jika pengecekan lolos, lanjutkan ke request berikutnya
        return $next($request);
    }
}
