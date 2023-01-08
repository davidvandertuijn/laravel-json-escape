<?php

namespace Davidvandertuijn\LaravelJsonEscape;

use Illuminate\Support\Facades\Response;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register services.
     */
    public function register() {}

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Response::macro('json_escape', function ($data) {
            array_walk_recursive($data, function (&$v, $k) {
                $v = strip_tags($v);
            });
            return Response::json($data);
        });
    }
}
