<?php

namespace PrestaShopBundle\Twig\Component\Legacy;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig')]
class LegacyToolbar extends \PrestaShopBundle\Twig\Component\Toolbar
{
    use \PrestaShopBundle\Twig\Component\Legacy\LegacyControllerTrait;
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, protected readonly \PrestaShop\PrestaShop\Core\Help\Documentation $helpDocumentation, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext)
    {
    }
    public function mount(string $layoutTitle = '', string $helpLink = '', bool $enableSidebar = false, string $layoutSubTitle = '', array $layoutHeaderToolbarBtn = [], array $breadcrumbLinks = []): void
    {
    }
    public function getTable(): string
    {
    }
}
