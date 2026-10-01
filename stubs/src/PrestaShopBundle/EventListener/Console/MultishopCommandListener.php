<?php

namespace PrestaShopBundle\EventListener\Console;

/**
 * Adds to optional input options to all the console commands:
 *  - id_shop to specify a shop context
 *  - id_shop_group to specify a shop group context
 */
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
