<?php

namespace PrestaShopBundle\Twig\Layout;

/**
 * Has the role of filling Smarty variables in the context.
 * To be used in a layout not based on a legacy controller.
 */
class SmartyVariablesFiller
{
    public function __construct(private readonly \PrestaShopBundle\Twig\Layout\TemplateVariables $templateVariables, private readonly \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext $legacyControllerContext, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $defaultLanguageContext, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \PrestaShop\PrestaShop\Core\Context\CountryContext $countryContext, private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private readonly \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    public function fill(string $title, string $metaTitle, bool $liteDisplay): void
    {
    }
    public function fillDefault(): void
    {
    }
    protected function getDefaultVariables(): array
    {
    }
}
