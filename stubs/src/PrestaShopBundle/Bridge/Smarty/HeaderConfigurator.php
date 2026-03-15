<?php

namespace PrestaShopBundle\Bridge\Smarty;

/**
 * Sets template variables for header.
 * For example notification tips, employee information, quick access...
 */
class HeaderConfigurator implements \PrestaShopBundle\Bridge\Smarty\ConfiguratorInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param LegacyContext $legacyContext
     * @param HookDispatcherInterface $hookDispatcher
     * @param Configuration $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * Assign smarty variables for the header.
     *
     * @param ControllerConfiguration $controllerConfiguration
     *
     * @return void
     */
    public function configure(\PrestaShopBundle\Bridge\AdminController\ControllerConfiguration $controllerConfiguration): void
    {
    }
}
