<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Removes all Tags for product
 */
class RemoveAllProductTagsCommand
{
    /**
     * @param int $productId
     */
    public function __construct(int $productId)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
