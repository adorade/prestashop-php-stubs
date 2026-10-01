<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Query;

class GetCarriersForProduct
{
    public function __construct(int $productId)
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
