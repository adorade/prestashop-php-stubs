<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryHandler;

/**
 * Defines contract for GetCatalogPriceRuleForEditingHandler
 */
interface GetCatalogPriceRuleListForProductHandlerInterface
{
    /**
     * @param GetCatalogPriceRuleListForProduct $query
     *
     * @return CatalogPriceRuleList
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleListForProduct $query): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult\CatalogPriceRuleList;
}
