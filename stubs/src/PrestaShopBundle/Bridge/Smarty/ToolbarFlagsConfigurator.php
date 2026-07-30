<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * This class sets help link, maintenance information, title, and others in the controller configuration.
 */
class ToolbarFlagsConfigurator implements \PrestaShopBundle\Bridge\Smarty\ConfiguratorInterface
{
    /**
     * @param Configuration $configuration
     * @param Documentation $documentation
     * @param bool $isDebugMode
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Core\Help\Documentation $documentation, bool $isDebugMode)
    {
    }
    /**
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function configure(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
    /**
     * assign default action in toolbar_btn smarty var, if they are not set.
     * uses override to specifically add, modify or remove items.
     *
     * This method will be used in add, edit...
     *
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function initToolbar(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
    /**
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function initPageHeaderToolbar(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
    /**
     * Set default toolbarTitle to admin breadcrumb.
     *
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function initToolbarTitle(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
}
