<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop;

class ShopImageAssociation
{
    public function __construct(int $imageId, bool $isCover)
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
}
