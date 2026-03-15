<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\QueryHandler;

/**
 * Defines contract for handler providing tax rules group for editing
 */
interface GetTaxRulesGroupForEditingHandlerInterface
{
    /**
     * @param GetTaxRulesGroupForEditing $query
     *
     * @return EditableTaxRulesGroup
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Query\GetTaxRulesGroupForEditing $query): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\QueryResult\EditableTaxRulesGroup;
}
