<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotCreator
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
        //dd($request);
        if(!($request->user()->isCreator($request->segment(2))))
        {
            return redirect('articles');
        }
        return $next($request);
    }
}
