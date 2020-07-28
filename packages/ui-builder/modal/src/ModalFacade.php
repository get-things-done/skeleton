<?php

namespace UiBuilder\Modal;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UiBuilder\Modal\Skeleton\SkeletonClass
 */
class ModalFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'modal';
    }
}
