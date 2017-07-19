# autoload

## composer 插件, 支持静态初值化；

!! 注意，静态初值化必须类必须经过composer加载, 自行require、include功能失效; 


## 使用

composer.json 引入 zanphp/autoload package

```json
{
  "require": {
    "zanphp/autoload": "dev-master"
  }
}
```

类加载时, public static function __static() 方法会自动执行, 必须无参数, 必须为静态方法

```php
<?php


class StaticTest
{
    public static function __static()
    {
        echo __CLASS__ . " initialized\n";
    }
}
```

或者显示实现接口;

```php
<?php

use Composer\Autoload\StaticInitializerInterface;

class StaticInterfaceTest implements StaticInitializerInterface
{
    public static function __static()
    {
        echo __CLASS__ . " initialized\n";
    }
}
```