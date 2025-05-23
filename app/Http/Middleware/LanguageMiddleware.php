<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
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
        $locale = $request->session()->get('locale');
        \Log::info('Session locale from request: ' . $locale);
    
        if ($locale) {
            App::setLocale($locale);
            \Log::info('Laravel locale set to: ' . App::getLocale());
        }
    
        return $next($request);
    }
}
