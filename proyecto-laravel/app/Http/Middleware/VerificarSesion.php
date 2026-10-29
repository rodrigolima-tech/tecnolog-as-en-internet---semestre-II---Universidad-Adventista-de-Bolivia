<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarSesion
{

    public function handle(Request $request, Closure $next)
    {
        if (!session('usuario')) {
            return redirect('/login');
        }

        return $next($request); 
    }
}
