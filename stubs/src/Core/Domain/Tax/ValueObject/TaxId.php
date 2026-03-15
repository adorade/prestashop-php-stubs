<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject;

/**
 * Provides tax id data
 */
class TaxId
{
    /**
     * @param int $taxId
     *
     * @throws TaxConstraintException
     */
    public function __construct($taxId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
