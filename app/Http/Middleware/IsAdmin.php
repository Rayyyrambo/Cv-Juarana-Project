<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->isAdmin()){
            return $next($request);
        }
        
        // Logout user jika bukan admin
        if(auth()->check()){
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        
        return redirect()->route('login')
            ->with('error', 'Akses ditolak. Hanya admin yang dapat mengakses halaman ini.');
    }
}
