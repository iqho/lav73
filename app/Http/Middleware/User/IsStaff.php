<?php

namespace App\Http\Middleware\User;

use Closure;

class IsStaff
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
            if(auth()->user()->role == 2){
                return $next($request);
            }
       
            return redirect('error');
        }
}
