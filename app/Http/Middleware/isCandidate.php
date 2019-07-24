<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class isCandidate
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
        if(Auth::check()){
            if($request->user()->user_type == 'candidate' || $request->user()->user_type == 'super_admin'){
                return $next($request);
            }
        }
        return redirect('/');
    }
}
