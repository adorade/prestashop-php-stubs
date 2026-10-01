<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject;

class MinimumAmount extends \PrestaShop\PrestaShop\Core\Domain\ValueObject\Money
{
    public function __construct(\PrestaShop\Decimal\DecimalNumber $amount, \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId, bool $taxIncluded, private readonly bool $shippingIncluded)
    {
    }
    public function isShippingIncluded(): bool
    {
    }
}
