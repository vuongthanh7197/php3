<?php

namespace App\Http\Middleware;

use Closure;

class CheckActiveAdmin
{
    // php artisan make:middleware CheckActiveAdmin

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        // lấy ra thông tin của admin đã đăng nhập
        $user = $request ->user();
        
        // kiểm tra xem user có active hay k 
        if($user->is_active ==0) {
            return abort(403, 'Không có quyền!');
        }
            
        return $next($request);
    }
}
