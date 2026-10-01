<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult;

class MinimumAmount extends \PrestaShop\PrestaShop\Core\Domain\QueryResult\Money
{
    public function __construct(\PrestaShop\Decimal\DecimalNumber $amount, int $currencyId, bool $taxIncluded, private readonly bool $shippingIncluded)
    {
    }
    public function isShippingIncluded(): bool
    {
    }
}
