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
                
            if(auth()->user()->active == 1){
                return $next($request);
            }
            else{
                return redirect('blockuser');
            }
            
            }
       
            return redirect('error');
        }
}
