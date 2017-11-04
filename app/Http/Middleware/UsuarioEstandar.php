<?php

namespace App\Http\Middleware;

use Closure;

class UsuarioEstandar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
          $usuario_actual=\Auth::user();
        if ($usuario_actual->TipoUsers!=0) {
               
          return response()->view('errors.600');
        }
         return $next($request);


         
    
    }
}
