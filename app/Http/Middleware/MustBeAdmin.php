<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
        $user = $request->user();

        if ($user && $user->name == 'FrankAdminGreen' )
        {
            return $next($request);
        }

       // abort(404, 'You Are Not Frank Green');

        return view('welcome');
    }
}
