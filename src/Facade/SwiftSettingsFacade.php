<?php

namespace LaravelDaddy\SwiftSettings\Facade;

use Illuminate\Support\Facades\Facade;

class SwiftSettingsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'swift-settings';
    }
}