<?php

namespace PrestaShopBundle\Twig\Component\Legacy;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig')]
class LegacyHeadTag extends \PrestaShopBundle\Twig\Component\HeadTag
{
    use \PrestaShopBundle\Twig\Component\Legacy\LegacyControllerTrait;
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShopBundle\Twig\Layout\TemplateVariables $templateVariables, \PrestaShop\PrestaShop\Core\Context\CountryContext $countryContext, \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, \PrestaShop\PrestaShop\Core\Context\LanguageContext $defaultLanguageContext, \PrestaShop\PrestaShop\Core\Context\CurrencyContext $currencyContext, \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext $legacyControllerContext, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    public function mount(string $metaTitle = ''): void
    {
    }
    public function getControllerName(): string
    {
    }
    public function getLegacyToken(): string
    {
    }
    public function getCurrentIndex(): string
    {
    }
    public function getCssFiles(): array
    {
    }
    public function getJsFiles(): array
    {
    }
    /**
     * Legacy controller builds the meta title differently, so we match this for backward compatibility and so that the UI
     * tests can run with their expected values.
     *
     * @return string
     */
    protected function getLegacyMetaTitle(): string
    {
    }
    protected function addCss(array|string $cssUri, string $cssMediaType = 'all', ?int $offset = null, bool $checkPath = true): void
    {
    }
    protected function addJs(array|string $jsUri, bool $checkPath = true): void
    {
    }
    protected function addJqueryUI(array|string $component, string $theme = 'base', bool $checkDependencies = true): void
    {
    }
    protected function addJqueryPlugin(array|string $name, ?string $folder = null, bool $css = true): void
    {
    }
}
