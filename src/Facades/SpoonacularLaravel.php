<?php

namespace Rabol\SpoonacularLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rabol\SpoonacularLaravel\SpoonacularLaravel
 */
class SpoonacularLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rabol\SpoonacularLaravel\SpoonacularLaravel::class;
    }
}
