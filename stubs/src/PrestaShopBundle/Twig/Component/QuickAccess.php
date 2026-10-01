<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/quick_access.html.twig')]
class QuickAccess
{
    /**
     * List of Quick Accesses to display
     */
    protected ?array $quickAccesses = null;
    /**
     * Active Quick access based on current request uri
     */
    protected array|false|null $activeQuickAccess = null;
    /**
     * Clean current Url
     */
    protected ?string $currentPageQuickAccessLink = null;
    /**
     * Current page title
     */
    protected ?string $currentPageTitle = null;
    /**
     * Current page icon
     */
    protected ?string $currentPageIcon = null;
    public function __construct(protected readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, protected readonly \PrestaShopBundle\Twig\Layout\MenuBuilder $menuBuilder, protected readonly \PrestaShop\PrestaShop\Core\QuickAccess\QuickAccessGenerator $quickAccessGenerator)
    {
    }
    /**
     * Get quick accesses to display
     */
    public function getQuickAccesses(): array
    {
    }
    /**
     * Retrieve and prepare quick accesses data for twig view
     */
    public function getActiveQuickAccess(): array|false
    {
    }
    /**
     * Get current clean url.
     */
    public function getCurrentPageQuickAccessLink(): string
    {
    }
    /**
     * Get current title
     */
    public function getCurrentPageTitle(): string
    {
    }
    /**
     * Get current title
     */
    public function getCurrentPageIcon(): string
    {
    }
    protected function fillCurrentUrlFields(): void
    {
    }
    /**
     * Return true if the current page is the quick access url
     */
    protected function isCurrentPage(string $url): bool
    {
    }
}
