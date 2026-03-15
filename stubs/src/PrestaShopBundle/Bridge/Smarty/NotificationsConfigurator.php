<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * This class hydrates controller configuration with notifications permissions
 * to know if the connected user can see the notifications or not.
 */
class NotificationsConfigurator implements \PrestaShopBundle\Bridge\Smarty\ConfiguratorInterface
{
    /**
     * @param Configuration $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * Sets the smarty variables and js defs used to show / hide some notifications.
     *
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function configure(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration)
    {
    }
}
