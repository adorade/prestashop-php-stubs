<?php

namespace PrestaShop\PrestaShop\Adapter\Module\Tab;

/**
 * This class subscribes to the events module installation / uninstallation
 * in order to install or remove its tabs as well.
 */
class ModuleTabManagementSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabRegister $moduleTabRegister, \PrestaShop\PrestaShop\Adapter\Module\Tab\ModuleTabUnregister $moduleTabUnregister)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
    }
    /**
     * @param ModuleManagementEvent $event
     */
    public function onModuleInstall(\PrestaShopBundle\Event\ModuleManagementEvent $event)
    {
    }
    /**
     * @param ModuleManagementEvent $event
     */
    public function onModuleUninstall(\PrestaShopBundle\Event\ModuleManagementEvent $event)
    {
    }
    /**
     * @param ModuleManagementEvent $event
     */
    public function onModuleEnable(\PrestaShopBundle\Event\ModuleManagementEvent $event)
    {
    }
    /**
     * @param ModuleManagementEvent $event
     */
    public function onModuleDisable(\PrestaShopBundle\Event\ModuleManagementEvent $event)
    {
    }
}
