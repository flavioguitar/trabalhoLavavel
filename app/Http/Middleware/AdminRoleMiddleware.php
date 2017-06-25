<?php

namespace trabalho\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class AdminRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $role) {
        if (Auth::check() && Auth::user()->authorizeRole($role)) {
            return $next($request);
        }
        abort('401','Operação não autorizada');
    }
}
