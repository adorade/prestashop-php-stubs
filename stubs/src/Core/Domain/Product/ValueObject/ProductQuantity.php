<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

class ProductQuantity
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, int $quantity)
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    public function getQuantity(): int
    {
    }
}
