<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject;

class FixedPrice implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\FixedPriceInterface
{
    public function __construct(string $value)
    {
    }
    public function getValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
