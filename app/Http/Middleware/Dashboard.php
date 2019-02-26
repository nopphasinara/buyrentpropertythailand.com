<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;

class Dashboard
{

    /**
     * The application instance.
     *
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->app->dashboard = $this;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->getRouteGroupName($request)) {
            $this->app->dashboard->viewpath = $this->viewpath($request);
        }

        return $next($request);
    }

    /**
     * Get the root path of the dashboard by route name.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function viewpath($request)
    {
        return $this->getRouteGroupName($request) ?? '';
    }

    /**
     * Check route name and return the name.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function getRouteGroupName($request)
    {
        return $request->route()->action['name'] ?? '';
    }
}
