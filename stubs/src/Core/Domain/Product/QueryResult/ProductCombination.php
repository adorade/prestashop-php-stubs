<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Holds product combination data
 */
class ProductCombination
{
    /**
     * @param int $attributeCombinationId
     * @param string $attribute
     * @param int $stock
     * @param string $formattedPrice
     * @param float $priceTaxExcluded
     * @param float $priceTaxIncluded
     * @param string $location
     * @param string $reference
     */
    public function __construct(int $attributeCombinationId, string $attribute, int $stock, string $formattedPrice, float $priceTaxExcluded, float $priceTaxIncluded, string $location, string $reference)
    {
    }
    /**
     * @return int
     */
    public function getAttributeCombinationId(): int
    {
    }
    /**
     * @return string
     */
    public function getAttribute(): string
    {
    }
    /**
     * @return string
     */
    public function getLocation(): string
    {
    }
    /**
     * @return float
     */
    public function getPriceTaxExcluded(): float
    {
    }
    /**
     * @return float
     */
    public function getPriceTaxIncluded(): float
    {
    }
    /**
     * @return int
     */
    public function getStock(): int
    {
    }
    /**
     * @return string
     */
    public function getFormattedPrice(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @param string $name
     */
    public function appendAttributeName(string $name)
    {
    }
}
