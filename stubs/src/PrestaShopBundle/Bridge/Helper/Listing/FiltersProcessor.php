<?php

namespace PrestaShopBundle\Bridge\Helper\Listing;

/**
 * This class processes filters, stores them in cookies and updates the list's SQL query.
 */
class FiltersProcessor
{
    /**
     * @param LegacyContext $legacyContext
     * @param HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
    /**
     * @param Request $request
     * @param HelperListConfiguration $helperListConfiguration
     *
     * @return void
     */
    public function processFilters(\Symfony\Component\HttpFoundation\Request $request, \PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration $helperListConfiguration): void
    {
    }
    /**
     * @param HelperListConfiguration $helperListConfiguration
     * @param Request|null $request
     *
     * @return void
     */
    protected function resetFilters(\PrestaShopBundle\Bridge\Helper\Listing\HelperListConfiguration $helperListConfiguration, \Symfony\Component\HttpFoundation\Request $request = null): void
    {
    }
}
