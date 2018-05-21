<?php

namespace Kielabokkie\LaravelIpdata\Facades;

use Illuminate\Support\Facades\Facade;

class Ipdata extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ipdata';
    }
}
