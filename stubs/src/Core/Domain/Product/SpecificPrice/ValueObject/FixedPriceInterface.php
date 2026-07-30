<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject;

/**
 * @see FixedPrice
 * @see InitialPrice
 */
interface FixedPriceInterface
{
    /**
     * @return DecimalNumber
     */
    public function getValue(): \PrestaShop\Decimal\DecimalNumber;
}
