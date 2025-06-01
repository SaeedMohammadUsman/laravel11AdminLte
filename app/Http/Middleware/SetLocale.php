<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check session for locale or default to 'en'
        $locale = Session::get('locale', 'en');
        App::setLocale($locale);

        // Share direction variable globally (ltr or rtl)
        // Farsi is rtl, English is ltr
        $direction = $locale === 'fa' ? 'rtl' : 'ltr';
        view()->share('direction', $direction);

        return $next($request);
    }
}
