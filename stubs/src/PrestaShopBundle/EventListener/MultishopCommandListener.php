<?php

namespace PrestaShopBundle\EventListener;

class MultishopCommandListener
{
    public $context;
    /**
     * Path to root dir, needed to require config file.
     *
     * @var string
     */
    public $rootDir;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Shop\Context $context, $rootDir)
    {
    }
    public function onConsoleCommand(\Symfony\Component\Console\Event\ConsoleCommandEvent $event)
    {
    }
}
