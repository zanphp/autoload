<?php

namespace ZanPHP\Autoload;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class AutoloadPlugin implements PluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        echo "Rewrite autoload.php\n";
        $autoloadGenerator = new StaticInitializerAutoloadGenerator($composer->getEventDispatcher(), $io);
        $composer->setAutoloadGenerator($autoloadGenerator);
    }
}