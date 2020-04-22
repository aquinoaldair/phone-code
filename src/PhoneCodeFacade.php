<?php

namespace Aquinoaldair\PhoneCode;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aquinoaldair\PhoneCode\Skeleton\SkeletonClass
 */
class PhoneCodeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phone-code';
    }
}
