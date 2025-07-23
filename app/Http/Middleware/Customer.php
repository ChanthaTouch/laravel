<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Customer
{
    /**
     * The URIs that should be excluded from middleware processing.
     *
     * @var array
     */
    protected $except = [
        '/add-customer',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (in_array($request->path(), $this->except)) {
            return $next($request);
        }

        // // Example: Check if the user is authenticated
        // if (auth()->check()) {
        //     return $next($request);
        // }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}