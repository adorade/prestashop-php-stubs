<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderProductsForViewing
{
    /**
     * @param OrderProductForViewing[] $products
     */
    public function __construct(array $products)
    {
    }
    /**
     * @return OrderProductForViewing[]
     */
    public function getProducts(): array
    {
    }
}
