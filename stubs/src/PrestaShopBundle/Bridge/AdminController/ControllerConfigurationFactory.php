<?php

namespace PrestaShopBundle\Bridge\AdminController;

/**
 * Create an instance of the controller configuration object.
 */
class ControllerConfigurationFactory
{
    /**
     * @param \PrestaShopBundle\Service\DataProvider\UserProvider $userProvider
     * @param \Link $link
     */
    public function __construct(\PrestaShopBundle\Service\DataProvider\UserProvider $userProvider, \Link $link)
    {
    }
    /**
     * @param int $tabId
     * @param string $objectModelClassName
     * @param string $legacyControllerName
     * @param string $tableName
     *
     * @return ControllerConfiguration
     */
    public function create(int $tabId, string $objectModelClassName, string $legacyControllerName, string $tableName): \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration
    {
    }
}
