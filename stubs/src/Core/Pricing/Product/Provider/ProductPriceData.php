<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product\Provider;

/**
 * Raw pricing data fetched from the database for a product and optionally its combination.
 * Contains only the values as stored — no computation is performed here.
 */
class ProductPriceData
{
    public function __construct(protected readonly \PrestaShop\Decimal\DecimalNumber $price, protected readonly \PrestaShop\Decimal\DecimalNumber $unitPrice, protected readonly \PrestaShop\Decimal\DecimalNumber $combinationImpact, protected readonly \PrestaShop\Decimal\DecimalNumber $combinationUnitPriceImpact)
    {
    }
    /**
     * ps_product.price — the base catalog price.
     */
    public function getPriceTaxExcluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * ps_product.unit_price — the base unit price.
     */
    public function getUnitPriceTaxExcluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * ps_product_attribute.price — the combination impact on catalog price (0 when no combination).
     */
    public function getCombinationImpactTaxExcluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * ps_product_attribute.unit_price_impact — the combination unit price impact (0 when no combination).
     */
    public function getCombinationUnitPriceImpactTaxExcluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
