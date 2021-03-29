<?php

namespace Deved\Magento2Graphql;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deved\Magento2Graphql\Skeleton\SkeletonClass
 */
class Magento2GraphqlFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'magento2-graphql';
    }
}
