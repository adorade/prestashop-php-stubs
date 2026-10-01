<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject;

/**
 * @see FixedPrice
 * @see InitialPrice
 */
interface FixedPriceInterface
{
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getValue(): \PrestaShop\Decimal\DecimalNumber;
}
