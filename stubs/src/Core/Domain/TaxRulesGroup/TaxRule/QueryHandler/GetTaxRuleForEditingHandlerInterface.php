<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryHandler;

/**
 * Defines contract for getting tax rule data for editing
 */
interface GetTaxRuleForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Query\GetTaxRuleForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryResult\EditableTaxRule
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Query\GetTaxRuleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryResult\EditableTaxRule;
}
