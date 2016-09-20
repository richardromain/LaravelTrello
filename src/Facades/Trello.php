<?php

namespace Richardromain\LaravelTrello\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Richardromain\LaravelTrello\Trello
 */
class Trello extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Richardromain\LaravelTrello\Trello';
    }
}
