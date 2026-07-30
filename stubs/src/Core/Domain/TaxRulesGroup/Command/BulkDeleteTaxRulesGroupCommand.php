<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Command;

/**
 * Command responsible for multiple tax rules groups deletion
 */
class BulkDeleteTaxRulesGroupCommand
{
    /**
     * @param int[] $taxRulesGroupIds
     *
     * @throws TaxRulesGroupConstraintException
     */
    public function __construct(array $taxRulesGroupIds)
    {
    }
    /**
     * @return TaxRulesGroupId[]
     */
    public function getTaxRulesGroupIds(): array
    {
    }
}
