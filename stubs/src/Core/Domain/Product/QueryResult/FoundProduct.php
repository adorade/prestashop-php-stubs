<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * DTO for product that was found by search
 */
class FoundProduct
{
    /**
     * @param int $productId
     * @param string $name
     * @param string $formattedPrice
     * @param float $priceTaxIncl
     * @param float $priceTaxExcl
     * @param float $taxRate
     * @param int $stock
     * @param string $location
     * @param bool $availableOutOfStock
     * @param ProductCombination[] $combinations
     * @param ProductCustomizationField[] $customizationFields
     */
    public function __construct(int $productId, string $name, string $formattedPrice, float $priceTaxIncl, float $priceTaxExcl, float $taxRate, int $stock, string $location, bool $availableOutOfStock, array $combinations = [], array $customizationFields = [])
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return string
     */
    public function getLocation(): string
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getFormattedPrice(): string
    {
    }
    /**
     * @return float
     */
    public function getPriceTaxIncl(): float
    {
    }
    /**
     * @return float
     */
    public function getPriceTaxExcl(): float
    {
    }
    /**
     * @return int
     */
    public function getStock(): int
    {
    }
    /**
     * @return float
     */
    public function getTaxRate(): float
    {
    }
    /**
     * @return ProductCombination[]
     */
    public function getCombinations(): array
    {
    }
    /**
     * @return ProductCustomizationField[]
     */
    public function getCustomizationFields(): array
    {
    }
    /**
     * @return bool
     */
    public function isAvailableOutOfStock(): bool
    {
    }
}
