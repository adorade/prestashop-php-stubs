<?php

namespace PrestaShop\PrestaShop\Core\Module;

class EventSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleRepository $moduleRepository, \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SymfonyCacheClearer $cacheClearer)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function onModuleStateChanged(\PrestaShopBundle\Event\ModuleManagementEvent $event): void
    {
    }
    public function onModuleInstalledOrUninstalled(\PrestaShopBundle\Event\ModuleManagementEvent $event): void
    {
    }
}
