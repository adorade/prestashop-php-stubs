<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

class Dimension
{
    /**
     * @param string $value
     *
     * @throws DomainConstraintException
     */
    public function __construct(string $value)
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getDecimalValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
