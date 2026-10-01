<?php

namespace PrestaShopBundle\Twig\Layout;

class MenuBuilder
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, private readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \Symfony\Component\Routing\Generator\UrlGeneratorInterface $urlGenerator, private readonly \PrestaShopBundle\Routing\Converter\LegacyParametersConverter $legacyParametersConverter)
    {
    }
    public function getCurrentTab(): ?\PrestaShopBundle\Entity\Tab
    {
    }
    public function getCurrentTabLevel(): int
    {
    }
    /* @return Tab[] */
    public function getAncestorsTab(int $currentTabId): array
    {
    }
    /**
     * @return array<string, MenuLink>
     */
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * @return array<string, MenuLink>
     */
    public function convertTabsToBreadcrumbLinks(\PrestaShopBundle\Entity\Tab $currentTab, array $tabAncestors): array
    {
    }
    /**
     * @return array<int, MenuLink>
     */
    public function buildNavigationTabs(\PrestaShopBundle\Entity\Tab $tab): array
    {
    }
    public function getLegacyControllerClassName(): ?string
    {
    }
}
