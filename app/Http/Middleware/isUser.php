<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        dd("HE LLEGADO");
        if(Auth::check()) {
            if(Auth::user()->username == 'user'){
                return $next($request);
            }else{
                return redirect('/user')->with('message', 'Aceso denegado no eres usuario!');
            }
        }else{
            return redirect('/user')->with('message', 'Inicia session para acceder a la pagina.');
        }

    }
}
