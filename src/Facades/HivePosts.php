<?php

namespace Sixincode\HivePosts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sixincode\HivePosts\HivePosts
 */
class HivePosts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sixincode\HivePosts\HivePosts::class;
    }
}
