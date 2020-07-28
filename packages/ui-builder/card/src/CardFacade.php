<?php

namespace UiBuilder\Card;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\Card\Skeleton\SkeletonClass
 */
class CardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'card';
    }
}
