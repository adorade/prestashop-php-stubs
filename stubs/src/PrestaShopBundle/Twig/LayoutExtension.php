<?php

namespace PrestaShopBundle\Twig;

/**
 * This class is used by Twig_Environment and provide layout methods callable from a twig template.
 */
class LayoutExtension extends \Twig\Extension\AbstractExtension implements \Twig\Extension\GlobalsInterface
{
    /**
     * Constructor.
     *
     * Keeps the Context to look inside language settings.
     *
     * @param LegacyContext $context
     * @param string $environment
     * @param Configuration $configuration
     * @param CurrencyDataProvider $currencyDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $context, $environment, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider)
    {
    }
    /**
     * Provides globals for Twig templates.
     *
     * @return array the base globals available in twig templates
     */
    public function getGlobals(): array
    {
    }
    /**
     * Define available filters.
     *
     * @return array Twig_SimpleFilter
     */
    public function getFilters()
    {
    }
    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
    }
    /**
     * Returns a legacy configuration key.
     *
     * @param string $key
     * @param mixed $default Default value is null
     * @param ShopConstraint $shopConstraint Default value is null
     *
     * @return mixed
     */
    public function getConfiguration($key, $default = null, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null)
    {
    }
    /**
     * Get admin legacy layout into old controller context.
     *
     * Parameters can be set manually into twig template or sent from controller
     * For details : check Resources/views/Admin/Layout.html.twig
     *
     * @param string $controllerName The legacy controller name
     * @param string $title The page title to override default one
     * @param array $headerToolbarBtn The header toolbar to override
     * @param string $displayType The legacy display type variable
     * @param bool $showContentHeader Can force header toolbar (buttons and title) to be hidden with false value
     * @param array|string $headerTabContent Tabs labels
     * @param bool $enableSidebar Allow to use right sidebar to display docs for instance
     * @param string $helpLink If specified, will be used instead of legacy one
     * @param string[] $jsRouterMetadata JS Router needed configuration settings: base_url and security token
     * @param string $metaTitle
     * @param bool $useRegularH1Structure allows complex <h1> structure if set to false
     *
     * @throws Exception if legacy layout has no $content var replacement
     *
     * @return string The html layout
     */
    public function getLegacyLayout($controllerName = '', $title = '', $headerToolbarBtn = [], $displayType = '', $showContentHeader = true, $headerTabContent = '', $enableSidebar = false, $helpLink = '', $jsRouterMetadata = [], $metaTitle = '', $useRegularH1Structure = true, $baseLayout = 'layout.tpl')
    {
    }
    /**
     * This is a Twig port of the Smarty {$link->getAdminLink()} function.
     *
     * @param string $controllerName
     * @param bool $withToken
     * @param array<string> $extraParams
     *
     * @return string
     */
    public function getAdminLink($controllerName, $withToken = true, $extraParams = [])
    {
    }
    /**
     * KISS function to get an embedded iframe from Youtube.
     */
    public function getYoutubeLink($watchUrl)
    {
    }
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
    }
}
