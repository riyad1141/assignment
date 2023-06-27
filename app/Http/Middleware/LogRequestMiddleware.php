<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Log the request method and URL
        $logMessage = 'Request Method: ' . $request->method() . ', URL: ' . $request->fullUrl();
        \Illuminate\Support\Facades\Log::info($logMessage);

        return $next($request);
    }

}
