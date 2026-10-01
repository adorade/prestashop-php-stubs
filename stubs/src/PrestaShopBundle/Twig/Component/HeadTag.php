<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/head_tag.html.twig')]
class HeadTag
{
    protected string $metaTitle;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, protected readonly \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder, protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected readonly \PrestaShopBundle\Twig\Layout\TemplateVariables $templateVariables, protected readonly \PrestaShop\PrestaShop\Core\Context\CountryContext $countryContext, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $defaultLanguageContext, protected readonly \PrestaShop\PrestaShop\Core\Context\CurrencyContext $currencyContext, protected readonly \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext $legacyControllerContext, protected readonly \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    public function mount(string $metaTitle): void
    {
    }
    public function getEmployeeToken(): string
    {
    }
    public function getJsDef(): array
    {
    }
    public function getPsVersion(): string
    {
    }
    public function getIsoUser(): string
    {
    }
    public function getCountryIsoCode(): string
    {
    }
    public function getLangIsRtl(): bool
    {
    }
    public function getShopName(): string
    {
    }
    public function getControllerName(): string
    {
    }
    public function getImgDir(): string
    {
    }
    public function getFullLanguageCode(): string
    {
    }
    public function getFullCldrLanguageCode(): string
    {
    }
    public function getRoundMode(): int
    {
    }
    public function getLegacyToken(): string
    {
    }
    public function getDefaultLanguage(): int
    {
    }
    public function getCurrentIndex(): string
    {
    }
    public function getEditForLabel(): string
    {
    }
    public function getCssFiles(): array
    {
    }
    public function getJsFiles(): array
    {
    }
    public function getMetaTitle(): string
    {
    }
    /**
     * Prepare price specifications to display cldr prices in javascript context.
     */
    protected function preparePriceSpecifications(): array
    {
    }
    /**
     * Prepare number specifications to display cldr numbers in javascript context.
     */
    protected function prepareNumberSpecifications(): array
    {
    }
}
