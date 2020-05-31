<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Role;
use App\Http\Services\UserService;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAccess
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
        if ($user->role !== Role::ADMIN){
            return abort(403);
        }
        return $next($request);
    }
}
