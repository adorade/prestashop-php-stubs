<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Minimum data to display a preview of a product
 */
class ProductPreview
{
    /**
     * @param int $productId
     * @param string $name
     * @param string $imageUrl
     */
    public function __construct(int $productId, string $name, string $imageUrl)
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
     * @return string
     */
    public function getImage(): string
    {
    }
}
