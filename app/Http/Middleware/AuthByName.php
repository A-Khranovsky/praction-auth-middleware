<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthByName
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guest = null)
    {
        if ($guest == 'guest') {
            return $next($request);
        } elseif ($request->your_name !== 'Alex') {
            abort(403);
        }
        return $next($request);
    }
}
