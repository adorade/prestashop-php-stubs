<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult;

/**
 * Transfers combination data for listing
 */
class EditableCombinationForListing
{
    /**
     * @param int $combinationId
     * @param string $combinationName
     * @param string $reference
     * @param CombinationAttributeInformation[] $attributesInformation
     * @param bool $default
     * @param DecimalNumber $impactOnPrice
     * @param int $quantity
     * @param string $imageUrl
     * @param DecimalNumber $ecoTax
     */
    public function __construct(int $combinationId, string $combinationName, string $reference, array $attributesInformation, bool $default, \PrestaShop\Decimal\DecimalNumber $impactOnPrice, int $quantity, string $imageUrl, \PrestaShop\Decimal\DecimalNumber $ecoTax)
    {
    }
    /**
     * @return int
     */
    public function getCombinationId(): int
    {
    }
    /**
     * @return CombinationAttributeInformation[]
     */
    public function getAttributesInformation(): array
    {
    }
    /**
     * @return string
     */
    public function getCombinationName(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return bool
     */
    public function isDefault(): bool
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getImpactOnPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * @return string
     */
    public function getImageUrl(): string
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getEcoTax(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
