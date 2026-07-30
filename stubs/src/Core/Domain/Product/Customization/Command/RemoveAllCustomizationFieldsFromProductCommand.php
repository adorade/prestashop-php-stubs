<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\Command;

/**
 * Removes all customization fields from product
 */
class RemoveAllCustomizationFieldsFromProductCommand
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
