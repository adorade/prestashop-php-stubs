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
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $context
     * @param \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider
     */
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider)
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
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint Default value is null
     *
     * @return mixed
     */
    public function getConfiguration($key, $default = null, ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null)
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
