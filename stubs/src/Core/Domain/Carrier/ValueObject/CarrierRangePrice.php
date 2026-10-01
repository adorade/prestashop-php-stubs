<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

/**
 * Price by Range and Zone for Carriers
 */
class CarrierRangePrice
{
    public function __construct(string $from, string $to, string $price)
    {
    }
    public function getFrom(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getTo(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
