<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/toolbar.html.twig')]
class Toolbar
{
    protected string $title = '';
    protected string $subTitle = '';
    protected string $helpLink = '';
    protected bool $sidebarEnabled = true;
    protected int $currentTabLevel = 0;
    /**
     * @var array<int, \PrestaShopBundle\Twig\Layout\MenuLink>
     */
    protected array $navigationTabs = [];
    /**
     * @var array<string, \PrestaShopBundle\Twig\Layout\MenuLink>
     */
    protected array $breadcrumbs = [];
    protected array $layoutHeaderToolbarBtn = [];
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, protected readonly \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder)
    {
    }
    public function mount(string $layoutTitle, string $helpLink, bool $enableSidebar, string $layoutSubTitle, array $layoutHeaderToolbarBtn, array $breadcrumbLinks = []): void
    {
    }
    public function getTitle(): string
    {
    }
    public function getSubTitle(): string
    {
    }
    public function getCurrentTabLevel(): int
    {
    }
    public function getBreadcrumbs(): array
    {
    }
    public function getNavigationTabs(): array
    {
    }
    public function isSidebarEnabled(): bool
    {
    }
    public function getHelpLink(): string
    {
    }
    public function getLayoutHeaderToolbarBtn(): array
    {
    }
    protected function setTitle(string $layoutTitle): void
    {
    }
    /**
     * @param \PrestaShopBundle\Twig\Layout\MenuLink[] $breadcrumbs
     * @param \PrestaShopBundle\Entity\Tab[] $tabs
     *
     * @return void
     */
    protected function setBreadcrumbs(array $breadcrumbs, array $tabs): void
    {
    }
}
