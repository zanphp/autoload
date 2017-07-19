<?php

namespace  ZanPHP\Autoload\Tests;


use Composer\Autoload\StaticInitializer;

class StaticInterfaceTest implements StaticInitializer
{
    public static function __static()
    {
        echo __CLASS__ . " initialized\n";
    }
}