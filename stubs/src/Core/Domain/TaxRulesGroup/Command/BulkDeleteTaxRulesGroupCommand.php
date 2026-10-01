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
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupConstraintException
     */
    public function __construct(array $taxRulesGroupIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId[]
     */
    public function getTaxRulesGroupIds(): array
    {
    }
}
