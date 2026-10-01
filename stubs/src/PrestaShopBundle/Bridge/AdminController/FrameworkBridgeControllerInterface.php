<?php

namespace PrestaShopBundle\Bridge\AdminController;

/**
 * Interface for horizontally migrated controllers
 */
interface FrameworkBridgeControllerInterface
{
    /**
     * @return LegacyControllerBridgeInterface
     */
    public function getLegacyControllerBridge(): \PrestaShopBundle\Bridge\AdminController\LegacyControllerBridgeInterface;
    /**
     * @return ControllerConfiguration
     */
    public function getControllerConfiguration(): \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration;
}
