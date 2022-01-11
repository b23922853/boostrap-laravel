<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckNumber
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

        // 進行到下一個步驟前需要做哪些處理
        
        
        if (Auth::check()){
            if (Auth::user()->name == 'admin'){
                //進行到下一個步驟就是下面這行
                return $next($request);
            }
        }
        Auth::logout(); //先將使用者登出

        return redirect('/login')->with('message', '你的不是admin, 你不可以進來!!');

        
    }
}
