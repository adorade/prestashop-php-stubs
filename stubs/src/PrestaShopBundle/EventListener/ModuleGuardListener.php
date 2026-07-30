<?php

namespace PrestaShopBundle\EventListener;

/**
 * Listen install/upgrade events from module manager, and protect the module vendor
 * folder using htaccess file.
 */
class ModuleGuardListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * @param FolderGuardInterface $vendorFolderGuard
     * @param string $modulesDir
     * @param LoggerInterface $logger
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Security\FolderGuardInterface $vendorFolderGuard, $modulesDir, \Psr\Log\LoggerInterface $logger)
    {
    }
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
    }
    /**
     * @param ModuleManagementEvent $event
     */
    public function protectModule(\PrestaShopBundle\Event\ModuleManagementEvent $event)
    {
    }
}
