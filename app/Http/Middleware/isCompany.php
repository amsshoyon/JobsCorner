<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class isCompany
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if($request->user()->user_type == 'company' || $request->user()->user_type == 'super_admin'){
                return $next($request);
            }
        }
        return redirect('/');
    }
}
