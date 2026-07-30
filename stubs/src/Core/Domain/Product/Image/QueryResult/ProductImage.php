<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult;

/**
 * Transfers product image data
 */
class ProductImage
{
    /**
     * @param int $imageId
     * @param bool $cover
     * @param int $position
     * @param array $localizedLegends
     * @param string $imageUrl
     * @param string $thumbnailUrl
     * @param int[] $shopIds
     */
    public function __construct(int $imageId, bool $cover, int $position, array $localizedLegends, string $imageUrl, string $thumbnailUrl, array $shopIds)
    {
    }
    /**
     * @return int
     */
    public function getImageId(): int
    {
    }
    /**
     * @return bool
     */
    public function isCover(): bool
    {
    }
    /**
     * @return array
     */
    public function getLocalizedLegends(): array
    {
    }
    /**
     * @return int
     */
    public function getPosition(): int
    {
    }
    /**
     * @return string
     */
    public function getImageUrl(): string
    {
    }
    /**
     * @return string
     */
    public function getThumbnailUrl(): string
    {
    }
    /**
     * @return int[]
     */
    public function getShopIds(): array
    {
    }
}
