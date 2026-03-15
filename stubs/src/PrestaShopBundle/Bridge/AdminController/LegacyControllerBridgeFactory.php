<?php

namespace PrestaShopBundle\Bridge\AdminController;

class LegacyControllerBridgeFactory
{
    /**
     * @param FeatureInterface $multistoreFeature
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return LegacyControllerBridgeInterface
     */
    public function create(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): \PrestaShopBundle\Bridge\AdminController\LegacyControllerBridgeInterface
    {
    }
}
