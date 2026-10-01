<?php

namespace PrestaShop\PrestaShop\Core\QuickAccess;

/**
 * Generator that centralizes the generation/cleaning/fetching of quick accesses, so it can be used th same way in legacy
 * and symfony code.
 */
class QuickAccessGenerator
{
    /**
     * link to new product creation form
     */
    protected const NEW_PRODUCT_LINK = 'index.php/sell/catalog/products/new';
    /**
     * link to new product creation form for product v2
     */
    protected const NEW_PRODUCT_V2_LINK = 'index.php/sell/catalog/products/create';
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\QuickAccess\QuickAccessRepositoryInterface $quickAccessRepository, protected readonly \PrestaShopBundle\Entity\Repository\TabRepository $tabRepository, protected readonly \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $tokenManager, protected readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, private readonly \Symfony\Bundle\SecurityBundle\Security $security)
    {
    }
    /**
     * Clean the saved quick link from base domain, index.ph and token to return its minimal form.
     *
     * @param string $savedUrl
     *
     * @return string
     */
    public function cleanQuickLink(string $savedUrl): string
    {
    }
    public function getTokenizedQuickAccesses(): array
    {
    }
    /**
     * Get tokenized url
     */
    protected function getTokenizedUrl(string $baseUrl): string
    {
    }
}
