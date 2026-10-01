<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\Query;

/**
 * This query returns a list of stock movements for a product, each row is either
 * an edition from the BO by an employee or a range of customer orders resume (all the
 * products that were sold between each edition).
 */
class GetProductStockMovements
{
    public const DEFAULT_LIMIT = 5;
    public function __construct(int $productId, int $shopId, int $offset = 0, int $limit = self::DEFAULT_LIMIT)
    {
    }
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    public function getOffset(): int
    {
    }
    public function getLimit(): int
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
