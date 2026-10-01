<?php

namespace PrestaShop\PrestaShop\Core\Pricing\ValueObject;

/**
 * Read-only contract for any price that carries tax-excluded, tax-included, tax-amount
 * and a tax rate. Implemented by TaxablePrice (auto-sync during computation) and
 * RoundedPrice (frozen independently-rounded values).
 */
interface TaxablePriceInterface
{
    public function getTaxExcluded(): \PrestaShop\Decimal\DecimalNumber;
    public function getTaxIncluded(): \PrestaShop\Decimal\DecimalNumber;
    public function getTaxAmount(): \PrestaShop\Decimal\DecimalNumber;
    public function getTaxRate(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate;
}
