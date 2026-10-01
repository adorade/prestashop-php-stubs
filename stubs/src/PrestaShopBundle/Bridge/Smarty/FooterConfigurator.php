<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * This class assign css files, js files, prestashop version,
 * and if the language is FR to the controller configuration.
 */
class FooterConfigurator implements \PrestaShopBundle\Bridge\Smarty\ConfiguratorInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * @param \PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function configure(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
}
