<?php

namespace PrestaShopBundle\Service\Form;

/**
 * Renders the multishop configuration dropdown for a specific configuration key, the dropdown content
 * is dynamic depending on which configuration is passed and if it has been overridden in group shop or shops.
 */
class MultistoreConfigurationDropdownRenderer
{
    public function __construct(private readonly \Twig\Environment $twig, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \PrestaShopBundle\Service\Multistore\CustomizedConfigurationChecker $customizedConfigurationChecker, private readonly \Doctrine\ORM\EntityManagerInterface $entityManager)
    {
    }
    public function renderDropdown(string $configurationKey): string
    {
    }
}
