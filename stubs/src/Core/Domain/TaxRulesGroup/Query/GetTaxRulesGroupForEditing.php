<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Query;

/**
 * Gets tax rules group for editing in Back Office
 */
class GetTaxRulesGroupForEditing
{
    /**
     * @param int $taxRulesGroupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupConstraintException
     */
    public function __construct(int $taxRulesGroupId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId
     */
    public function getTaxRulesGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
}
