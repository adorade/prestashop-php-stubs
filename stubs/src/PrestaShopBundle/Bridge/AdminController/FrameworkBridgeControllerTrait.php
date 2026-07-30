<?php

namespace PrestaShopBundle\Bridge\AdminController;

/**
 * Contains reusable methods for horizontally migrated controllers, this trait is used to help implement the
 *
 * @see FrameworkBridgeControllerInterface that is used for horizontal controllers and is required to be used by the
 * @see InitFrameworkBridgeControllerListener which is responsible for initializing horizontal controllers.
 */
trait FrameworkBridgeControllerTrait
{
    /**
     * @var ControllerConfiguration|null
     */
    private $controllerConfiguration;
    /**
     * @var LegacyControllerBridgeInterface|null
     */
    private $legacyControllerBridge;
    /**
     * @return LegacyControllerBridgeInterface
     */
    public function getLegacyControllerBridge(): \PrestaShopBundle\Bridge\AdminController\LegacyControllerBridgeInterface
    {
    }
    /**
     * @param string $tableName
     * @param string $objectModelClassName
     * @param string $legacyControllerName
     *
     * @return ControllerConfiguration
     *
     * @throws BridgeException
     */
    protected function buildControllerConfiguration(string $tableName, string $objectModelClassName, string $legacyControllerName): \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration
    {
    }
}
