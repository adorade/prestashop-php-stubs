<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product;

/**
 * Mutable DTO carrying the computed prices for a single product (or combination).
 * Calculators receive this and mutate it in place.
 */
interface ProductPriceInterface
{
    public function getProductId(): int;
    public function getCombinationId(): int;
    public function getQuantity(): int;
    public function getUnitPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setUnitPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $unitPrice): void;
    public function getOriginalPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setOriginalPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $originalPrice): void;
    public function getDiscountPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice;
    public function setDiscountPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $discountPrice): void;
    /**
     * The final rounded price after all discounts have been applied (originalPrice - discountPrice).
     */
    public function getFinalPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\ImmutableTaxablePrice;
    public function setFinalPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\ImmutableTaxablePrice $finalPrice): void;
}
