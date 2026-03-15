<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * This class get the breadcrumb and title information configuration from Tabs,
 * and sets them in the controller configuration.
 */
class BreadcrumbsAndTitleConfigurator implements \PrestaShopBundle\Bridge\Smarty\ConfiguratorInterface
{
    /**
     * @param LegacyContext $legacyContext
     * @param Configuration $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * Set breadcrumbs array for the controller page.
     *
     * @param ControllerConfiguration $controllerConfiguration
     */
    public function configure(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
    /**
     * Get breadcrumbs configuration from tabs.
     *
     * @param int $tabId
     *
     * @return array
     */
    public function getBreadcrumbs(int $tabId): array
    {
    }
    /**
     * Add an entry to the meta title.
     *
     * @param ControllerConfiguration $controllerConfiguration
     * @param string $entry new entry
     *
     * @return void
     */
    public function addMetaTitle(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration, string $entry): void
    {
    }
}
