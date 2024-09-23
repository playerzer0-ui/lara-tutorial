<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->input("age") && $request->input("age") < 18){
            echo "<h2>this is agecheck</h2>";
            return redirect("/noaccess");
        }
        return $next($request);
    }
}
