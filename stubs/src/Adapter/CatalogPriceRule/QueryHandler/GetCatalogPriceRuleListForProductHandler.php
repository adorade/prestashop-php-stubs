<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule\QueryHandler;

/**
 * Handles @see GetCatalogPriceRuleListForProduct
 */
class GetCatalogPriceRuleListForProductHandler implements \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryHandler\GetCatalogPriceRuleListForProductHandlerInterface
{
    /**
     * @param CatalogPriceRuleRepository $catalogPriceRuleRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\CatalogPriceRule\Repository\CatalogPriceRuleRepository $catalogPriceRuleRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleListForProduct $query): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult\CatalogPriceRuleList
    {
    }
}
