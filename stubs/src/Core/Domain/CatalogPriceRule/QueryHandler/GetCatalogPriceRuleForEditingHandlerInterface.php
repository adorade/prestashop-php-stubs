<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryHandler;

/**
 * Defines contract for GetCatalogPriceRuleForEditingHandler
 */
interface GetCatalogPriceRuleForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult\EditableCatalogPriceRule
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleForEditing $query);
}
