<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Author
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if($user && $user->status == 4) {
            return $next($request);
        }
        return redirect('/');
    }
}
