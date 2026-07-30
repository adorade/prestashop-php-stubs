<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Attachment\Command;

/**
 * Removes all product-attachment associations for provided product
 */
class RemoveAllAssociatedProductAttachmentsCommand
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
