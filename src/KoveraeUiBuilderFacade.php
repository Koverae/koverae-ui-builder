<?php

namespace Koverae\KoveraeUiBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Koverae\KoveraeUiBuilder\Skeleton\SkeletonClass
 */
class KoveraeUiBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'koverae-ui-builder';
    }
}
