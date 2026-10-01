<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command;

/**
 * Sets specific price priority for provided product
 */
class SetSpecificPricePriorityForProductCommand
{
    /**
     * @param int $productId
     * @param string[] $priorities
     */
    public function __construct(int $productId, array $priorities)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList
     */
    public function getPriorityList(): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList
    {
    }
}
