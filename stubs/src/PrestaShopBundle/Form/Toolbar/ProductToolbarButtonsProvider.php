<?php

namespace PrestaShopBundle\Form\Toolbar;

/**
 * This provider generates the list of buttons available in the toolbar on the product form page, these buttons
 * are displayed in the header part of the tab navigation component.
 */
class ProductToolbarButtonsProvider implements \PrestaShopBundle\Form\Toolbar\ToolbarButtonsProviderInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Routing\RouterInterface $router, \PrestaShop\PrestaShop\Adapter\Shop\Url\HelpProvider $helpUrlProvider, \PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    public function getToolbarButtonsOptions(array $parameters): array
    {
    }
}
