<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Command for creating product with basic information
 */
class AddProductCommand
{
    /**
     * @param string $productType
     * @param int $shopId
     * @param array $localizedNames
     */
    public function __construct(string $productType, int $shopId, array $localizedNames = [])
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return ProductType
     */
    public function getProductType(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType
    {
    }
    /**
     * @return ShopId
     */
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
}
