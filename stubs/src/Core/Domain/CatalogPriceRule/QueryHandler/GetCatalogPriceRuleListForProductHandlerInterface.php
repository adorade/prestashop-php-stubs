<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryHandler;

/**
 * Defines contract for GetCatalogPriceRuleForEditingHandler
 */
interface GetCatalogPriceRuleListForProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleListForProduct $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult\CatalogPriceRuleList
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleListForProduct $query): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult\CatalogPriceRuleList;
}
