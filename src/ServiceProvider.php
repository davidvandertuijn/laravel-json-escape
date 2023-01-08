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
        Response::macro('json_escape', function (array $data, array $exclude = []) {
            array_walk_recursive($data, function (&$v, $k) use ($exclude) {
                if (in_array($k, $exclude)) {
                    return true;
                }
                $v = strip_tags($v);
            });

            return Response::json($data, 200, [], JSON_UNESCAPED_SLASHES);
        });
    }
}
