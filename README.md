# autoload

## composer 插件, 模拟静态初值化

```php
<?php

interface StaticInitializer
{
    public static function __static();
}
```

!! 注意，静态初值化的须类必须经过composer加载.
 
 类加载时, `public static function __static()` 方法会自动执行, 必须无参数, 必须为静态方法

自行require、include功能失效; 


## 使用

composer.json 引入 zanphp/autoload package

```json
{
  "require": {
    "zanphp/autoload": "dev-master"
  }
}
```

### 可选接口实现

```php
<?php

namespace  ZanPHP\Autoload\Tests;

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

namespace  ZanPHP\Autoload\Tests;

use Composer\Autoload\StaticInitializer;

class StaticInterfaceTest implements StaticInitializer
{
    public static function __static()
    {
        echo __CLASS__ . " initialized\n";
    }
}
```


### test

```php
<?php

require __DIR__ . "/vendor/autoload.php";


class_exists(\ZanPHP\Autoload\Tests\StaticTest::class, true);

class_exists(\ZanPHP\Autoload\Tests\StaticInterfaceTest::class, true);

```

### output

```text
ZanPHP\Autoload\Tests\StaticTest initialized
ZanPHP\Autoload\Tests\StaticInterfaceTest initialized

```