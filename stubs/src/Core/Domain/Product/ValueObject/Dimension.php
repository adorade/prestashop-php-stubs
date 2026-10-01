<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

class Dimension
{
    /**
     * @param string $value
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\DomainConstraintException
     */
    public function __construct(string $value)
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getDecimalValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
