<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject;

/**
 * Represents "leave initial product price" option
 */
class InitialPrice implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\FixedPriceInterface
{
    /**
     * Inherited from legacy.
     * When SpecificPrice->price has this value, it means that product initial price is used.
     */
    public const INITIAL_PRICE_VALUE = '-1';
    public function __construct()
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param string $value
     *
     * @return bool
     */
    public static function isInitialPriceValue(string $value): bool
    {
    }
}
