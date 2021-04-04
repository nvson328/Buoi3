<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     //before middleware
    public function handle(Request $request, Closure $next, $maxAge=18)
    {   
        $maxAge = (int)$maxAge;
        $age = (int) $request->input('age');
        // dd($age);
        if($age >= $maxAge){
        return $next($request);
        }
        return redirect('/');
    }

    //after middle
    // public function handle(Request $request, Closure $next, $maxAge=18)
    // {   
    //      $reponse = $next($request);
    //     //do something
    //     log::info('after middleware');
    //     return $reponse;
    // }
}
