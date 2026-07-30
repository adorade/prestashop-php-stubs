<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult;

/**
 * Transfers combination data for editing
 */
class CombinationForEditing
{
    /**
     * @param int $combinationId
     * @param int $productId
     * @param string $name
     * @param CombinationDetails $options
     * @param CombinationPrices $prices
     * @param CombinationStock $stock
     * @param int[] $imageIds
     * @param string $coverThumbnailUrl
     * @param bool $isDefault
     */
    public function __construct(int $combinationId, int $productId, string $name, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationDetails $options, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationPrices $prices, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationStock $stock, array $imageIds, string $coverThumbnailUrl, bool $isDefault)
    {
    }
    /**
     * @return int
     */
    public function getCombinationId(): int
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
    public function getName(): string
    {
    }
    /**
     * @return CombinationDetails
     */
    public function getDetails(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationDetails
    {
    }
    /**
     * @return CombinationPrices
     */
    public function getPrices(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationPrices
    {
    }
    /**
     * @return CombinationStock
     */
    public function getStock(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult\CombinationStock
    {
    }
    /**
     * @return int[]
     */
    public function getImageIds(): array
    {
    }
    /**
     * @return string
     */
    public function getCoverThumbnailUrl(): string
    {
    }
    /**
     * @return bool
     */
    public function isDefault(): bool
    {
    }
}
