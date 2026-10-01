<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Query;

/**
 * Query to get a paginated list of tax rules for a given tax rules group
 */
class GetTaxRuleList
{
    public function __construct(int $taxRulesGroupId, private readonly int $languageId, private readonly ?int $limit = null, private readonly ?int $offset = null)
    {
    }
    public function getTaxRulesGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    public function getLanguageId(): int
    {
    }
    public function getLimit(): ?int
    {
    }
    public function getOffset(): ?int
    {
    }
}
