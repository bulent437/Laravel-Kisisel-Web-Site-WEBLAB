<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminGirisi
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->yetki == '1')
            return $next($request);

        return redirect()->route('home');
    }
}