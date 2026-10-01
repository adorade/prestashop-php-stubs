<?php

namespace PrestaShop\PrestaShop\Core\Pricing\ValueObject;

/**
 * Mutable price that automatically keeps tax-excluded, tax-included and tax-amount in sync
 * through its associated TaxRate.
 */
class TaxablePrice implements \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePriceInterface
{
    protected \PrestaShop\Decimal\DecimalNumber $taxExcluded;
    protected \PrestaShop\Decimal\DecimalNumber $taxIncluded;
    protected \PrestaShop\Decimal\DecimalNumber $taxAmount;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate $taxRate;
    protected function __construct(\PrestaShop\Decimal\DecimalNumber $taxExcluded, \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate $taxRate)
    {
    }
    /**
     * Builds from a tax-excluded value: derives taxIncluded from taxExcluded * taxRate multiplier.
     */
    public static function fromTaxExcluded(\PrestaShop\Decimal\DecimalNumber $taxExcluded, \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate $taxRate): self
    {
    }
    /**
     * Builds from a tax-included value: derives taxExcluded from taxIncluded / taxRate multiplier.
     */
    public static function fromTaxIncluded(\PrestaShop\Decimal\DecimalNumber $taxIncluded, \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate $taxRate): self
    {
    }
    public static function zero(): self
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
    /**
     * Sets tax-excluded and recomputes tax-included and tax amount.
     */
    public function setTaxExcluded(\PrestaShop\Decimal\DecimalNumber $taxExcluded): void
    {
    }
    /**
     * Sets tax-included and recomputes tax-excluded and tax amount.
     */
    public function setTaxIncluded(\PrestaShop\Decimal\DecimalNumber $taxIncluded): void
    {
    }
    /**
     * Sets the tax rate and recomputes tax-included and tax amount from tax-excluded (source of truth).
     */
    public function setTaxRate(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxRate $taxRate): void
    {
    }
    /**
     * Recomputes taxIncluded and taxAmount from taxExcluded (source of truth).
     */
    protected function syncFromTaxExcluded(): void
    {
    }
}
