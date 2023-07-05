<?php

namespace Overbeck\LaravelDataOpenAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Overbeck\LaravelDataOpenAPI\LaravelDataOpenAPI
 */
class LaravelDataOpenAPI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Overbeck\LaravelDataOpenAPI\LaravelDataOpenAPI::class;
    }
}
