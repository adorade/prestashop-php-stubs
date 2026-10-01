<?php

namespace PrestaShop\PrestaShop\Core\Pricing\ValueObject;

/**
 * Immutable TaxablePriceInterface implementation that stores tax-excluded and tax-included
 * as provided, with no auto-sync. Useful when both values have been independently computed
 * (e.g. after rounding) and must not be recomputed from one another.
 */
class ImmutableTaxablePrice implements \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePriceInterface
{
    /**
     * Creates an immutable snapshot from any TaxablePriceInterface, freezing its current values.
     */
    public static function fromTaxablePrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePriceInterface $price): self
    {
    }
    public function __construct(protected readonly \PrestaShop\Decimal\DecimalNumber $taxExcluded, protected readonly \PrestaShop\Decimal\DecimalNumber $taxIncluded, protected readonly \PrestaShop\Decimal\DecimalNumber $taxAmount, protected readonly \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate $taxRate)
    {
    }
    public function getTaxExcluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getTaxAmount(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getTaxRate(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate
    {
    }
}
