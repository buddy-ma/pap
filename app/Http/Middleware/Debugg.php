<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Barryvdh\Debugbar\Facades\Debugbar;

class Debugg
{
    public function __construct(App $app)
    {
        $this->app = $app;
    }

    public function handle($request, Closure $next)
    {
        if (env('APP_ENV') == 'production') {
            Debugbar::disable();
        } else {
            Debugbar::enable();
        }

        return $next($request);
    }
}