<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryResult;

/**
 * Transfers paginated list of tax rules
 */
class TaxRuleList
{
    /**
     * @param TaxRuleForList[] $taxRules
     * @param int $totalCount
     */
    public function __construct(private readonly array $taxRules, private readonly int $totalCount)
    {
    }
    /**
     * @return TaxRuleForList[]
     */
    public function getTaxRules(): array
    {
    }
    public function getTotalCount(): int
    {
    }
}
