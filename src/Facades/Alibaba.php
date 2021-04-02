<?php

namespace Cross\Facades;

/**
 * @method static \Cross\Alibaba addRequest(\Cross\Param\IParam $param)
 */

use Illuminate\Support\Facades\Facade;

class Alibaba extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "Alibaba";
    }

}
