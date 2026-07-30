<?php

namespace PrestaShopBundle\Bridge\Helper\Listing\HelperBridge;

/**
 * Acts as a bridge between symfony controller and the legacy HelperList to allow rendering the list
 *
 * @see HelperList
 * @see FrameworkBridgeControllerInterface
 */
class HelperListBridge
{
    /**
     * @param LegacyContext $legacyContext
     * @param UserProvider $userProvider
     * @param HookDispatcherInterface $hookDispatcher
     * @param Configuration $configuration
     * @param BreadcrumbsAndTitleConfigurator $breadcrumbsAndTitleConfigurator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShopBundle\Service\DataProvider\UserProvider $userProvider, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShopBundle\Bridge\Smarty\BreadcrumbsAndTitleConfigurator $breadcrumbsAndTitleConfigurator)
    {
    }
    /**
     * Generate the html for list using HelperList class
     *
     * @param HelperListConfiguration $helperListConfiguration
     *
     * @return string|null
     */
    public function generateList(\PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration $helperListConfiguration): ?string
    {
    }
    /**
     * @param HelperListConfiguration $helperListConfiguration
     * @param int $idLang
     *
     * @return string
     */
    protected function generateListQuery(\PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration $helperListConfiguration, int $idLang): string
    {
    }
}
