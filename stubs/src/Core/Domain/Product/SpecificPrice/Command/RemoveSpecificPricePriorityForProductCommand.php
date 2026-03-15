<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command;

class RemoveSpecificPricePriorityForProductCommand
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
