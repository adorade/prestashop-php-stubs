<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\QueryHandler;

/**
 * Handles query which gets tax rules group for editing
 */
final class GetTaxRulesGroupForEditingHandler extends \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\AbstractTaxRulesGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\QueryHandler\GetTaxRulesGroupForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws TaxRulesGroupNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Query\GetTaxRulesGroupForEditing $query): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\QueryResult\EditableTaxRulesGroup
    {
    }
}
