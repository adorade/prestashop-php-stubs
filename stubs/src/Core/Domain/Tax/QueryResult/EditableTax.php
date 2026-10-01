<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\QueryResult;

/**
 * Transfers editable tax data
 */
class EditableTax
{
    /**
     * EditableTax constructor.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId $taxId
     * @param string[] $localizedNames
     * @param float $rate
     * @param bool $active
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId $taxId, array $localizedNames, $rate, $active)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId
     */
    public function getTaxId()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @return float
     */
    public function getRate()
    {
    }
    /**
     * @return bool
     */
    public function isActive()
    {
    }
}
