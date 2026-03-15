<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\Query;

/**
 * This query returns a list of stock movements for a combination, each row is either
 * an edition from the BO by an employee or a range of customer orders resume (all the
 * combinations that were sold between each edition).
 */
class GetCombinationStockMovements
{
    public const DEFAULT_LIMIT = 5;
    /**
     * @throws CombinationConstraintException
     * @throws ShopException
     * @throws LogicException
     */
    public function __construct(int $combinationId, int $shopId, int $offset = 0, int $limit = self::DEFAULT_LIMIT)
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
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
}
