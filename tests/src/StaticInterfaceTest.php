<?php

namespace  ZanPHP\Autoload\Tests;


use Composer\Autoload\StaticInitializerInterface;

class StaticInterfaceTest implements StaticInitializerInterface
{
    public static function __static()
    {
        echo __CLASS__ . " initialized\n";
    }
}