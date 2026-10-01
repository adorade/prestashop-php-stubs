<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

class UpdateProductTypeCommand
{
    /**
     * @param int $productId
     * @param string $productType
     */
    public function __construct(int $productId, string $productType)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType
     */
    public function getProductType(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductType
    {
    }
}
