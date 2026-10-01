<?php

namespace PrestaShop\PrestaShop\Adapter\TaxRulesGroup\QueryHandler;

/**
 * Handles query which gets tax rule data for editing
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetTaxRuleForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryHandler\GetTaxRuleForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRuleRepository $taxRuleRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Query\GetTaxRuleForEditing $query): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryResult\EditableTaxRule
    {
    }
}
