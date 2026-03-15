<?php

namespace PrestaShop\PrestaShop\Adapter\CatalogPriceRule\QueryHandler;

/**
 * Handles command which gets catalog price rule for editing using legacy object model
 */
final class GetCatalogPriceRuleForEditingHandler extends \PrestaShop\PrestaShop\Adapter\CatalogPriceRule\AbstractCatalogPriceRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryHandler\GetCatalogPriceRuleForEditingHandlerInterface
{
    /**
     * @param GetCatalogPriceRuleForEditing $query
     *
     * @return EditableCatalogPriceRule
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Query\GetCatalogPriceRuleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult\EditableCatalogPriceRule
    {
    }
}
