<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserAuthendicationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::users()->active != 1)
        //if(Auth::guard('auth')->check())
        {
            //return redirect('login');
            return response->json('Opps! You do not have permission to access.');
        }
        return $next($request);
    }
}
