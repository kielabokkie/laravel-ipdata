<?php

namespace Kielabokkie\LaravelIpdata;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class IpdataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('ipdata', function () {
            $apiKey = $this->app['config']->get('services.ipdata.api_key');

            return new \Kielabokkie\Ipdata($apiKey);
        });
    }
}
