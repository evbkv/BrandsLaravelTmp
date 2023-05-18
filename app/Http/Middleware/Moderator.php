<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Moderator
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if($user && $user->status == 3) {
            return $next($request);
        }
        return redirect('/');
    }
}
