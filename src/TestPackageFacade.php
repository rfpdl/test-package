<?php

namespace Rfpdl\TestPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rfpdl\TestPackage\Skeleton\SkeletonClass
 */
class TestPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'test-package';
    }
}
