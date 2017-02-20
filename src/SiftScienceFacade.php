<?php 

namespace Pablumfication\LaravelSiftScience;

use Illuminate\Support\Facades\Facade;

class SiftScienceFacade extends Facade
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
