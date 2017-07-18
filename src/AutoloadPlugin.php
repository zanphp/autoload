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
        var_dump("XXX");
//        $autoloadGenerator = new Autoload\DoctrineAutoloadGenerator($composer->getEventDispatcher(), $io);
//        $composer->setAutoloadGenerator($autoloadGenerator);
    }
}