<?php
/**
 * Created by OKEYSC.
 * User: Robin
 * Date: 2021/3/31
 * Time: 16:03
 */

namespace CrossAlibaba\Facades;

use Illuminate\Support\Facades\Facade;

class CrossAlibaba extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "CrossAlibaba";
    }

}
