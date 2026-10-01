<?php

namespace PrestaShop\PrestaShop\Core\Pricing\Product;

/**
 * Lightweight ProductPrice DTO with no tracking overhead. Setters simply assign values.
 */
class ProductPrice implements \PrestaShop\PrestaShop\Core\Pricing\Product\ProductPriceInterface
{
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $unitPrice;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $originalPrice;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $discountPrice;
    protected \PrestaShop\PrestaShop\Core\Pricing\ValueObject\ImmutableTaxablePrice $finalPrice;
    protected function __construct(protected readonly int $productId, protected readonly int $combinationId, protected readonly int $quantity)
    {
    }
    public static function create(int $productId, int $combinationId, int $quantity = 1): self
    {
    }
    public function getProductId(): int
    {
    }
    public function getCombinationId(): int
    {
    }
    public function getQuantity(): int
    {
    }
    public function getUnitPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setUnitPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $unitPrice): void
    {
    }
    public function getOriginalPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setOriginalPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $originalPrice): void
    {
    }
    public function getDiscountPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice
    {
    }
    public function setDiscountPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\TaxablePrice $discountPrice): void
    {
    }
    public function getFinalPrice(): \PrestaShop\PrestaShop\Core\Pricing\ValueObject\ImmutableTaxablePrice
    {
    }
    public function setFinalPrice(\PrestaShop\PrestaShop\Core\Pricing\ValueObject\ImmutableTaxablePrice $finalPrice): void
    {
    }
}
