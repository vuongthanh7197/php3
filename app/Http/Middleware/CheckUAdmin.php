<?php

namespace App\Http\Middleware;

use Closure;

class CheckUAdmin
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
         $user = $request ->user();
         if($user->university != 'FPT') {
            return abort(403, 'Không có quyền do không thuộc FPT!');
        }
        return $next($request);
    }
}
