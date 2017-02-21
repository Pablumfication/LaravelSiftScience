<?php 

namespace Pablumfication\LaravelSiftScience\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelSiftScience extends Facade
{
    /**
     * Return facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelSiftScience';
    }
}
