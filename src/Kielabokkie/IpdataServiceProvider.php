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
        $this->publishes([
            __DIR__.'/../../config/ipdata.php' => config_path('ipdata.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('ipdata', function () {
            $apiKey = $this->app['config']->get('ipdata.api_key');

            return new \Kielabokkie\Ipdata($apiKey);
        });
    }
}
