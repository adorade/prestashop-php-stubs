<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Command;

/**
 * Adds new product image
 */
class AddProductImageCommand
{
    /**
     * @param int $productId
     * @param string $pathName
     * @param ShopConstraint $shopConstraint
     */
    public function __construct(int $productId, string $pathName, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return string
     */
    public function getFilePath(): string
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
