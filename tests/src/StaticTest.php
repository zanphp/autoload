<?php

namespace  ZanPHP\Autoload\Tests;


class StaticTest
{
    public static function __static()
    {
        echo __CLASS__ . " initialized\n";
    }
}