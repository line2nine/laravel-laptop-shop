<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        $user = Auth::user();
        if ($user->role == Role::USER){
            return redirect('/');
        }
        return $next($request);
    }
}
