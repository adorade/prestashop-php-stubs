<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Query;

/**
 * Gets tax for editing in Back Office
 */
class GetTaxForEditing
{
    /**
     * @param int $taxId
     */
    public function __construct($taxId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId
     */
    public function getTaxId()
    {
    }
}
