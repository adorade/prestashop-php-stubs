<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/nav_bar.html.twig')]
class NavBar
{
    protected ?array $tabs = null;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, protected readonly \Psr\Log\LoggerInterface $logger, protected readonly \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder, protected readonly string $psVersion)
    {
    }
    public function getDefaultTab(): string
    {
    }
    public function getPsVersion(): string
    {
    }
    public function getTabs(): array
    {
    }
    protected function buildTabs($parentId = 0, $level = 0): array
    {
    }
    protected function isValidTab(array $tab): bool
    {
    }
    protected function processTab(array $tab, int $currentId, int $level, ?string $controllerName): array
    {
    }
    protected function getTabLinkFromSubTabs(array $subtabs)
    {
    }
}
