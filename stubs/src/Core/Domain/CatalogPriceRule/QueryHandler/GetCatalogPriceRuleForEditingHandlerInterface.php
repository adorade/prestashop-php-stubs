<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryHandler;

/**
 * Defines contract for GetCatalogPriceRuleForEditingHandler
 */
interface GetCatalogPriceRuleForEditingHandlerInterface
{
    /**
     * @param GetCatalogPriceRuleForEditing $query
     *
     * @return EditableCatalogPriceRule
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleForEditing $query);
}
