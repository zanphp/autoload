<?php

namespace ZanPHP\Autoload;


class ClassLoader extends \Composer\Autoload\ClassLoader
{
    const STATIC_INITIALIZER_METHOD_NAME = "__static";

    public function loadClass($class)
    {
        if ($file = $this->findFile($class)) {
            includeFile($file);

            if (class_exists($class, false)) {
                $method = static::STATIC_INITIALIZER_METHOD_NAME;
                if (is_subclass_of($class, StaticInitializerInterface::class)) {
                    call_user_func("$class::$method");
                }

                // 不能使用  is_callable, 因为 __call __callStatic !
                if (method_exists($class, $method)) {
                    if ((new \ReflectionMethod($class, $method))->isStatic()) {
                        call_user_func("$class::$method");
                    }
                }
            }

            return true;
        }
    }
}