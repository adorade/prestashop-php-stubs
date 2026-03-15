<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Query;

/**
 * Query which provides combination for editing
 */
class GetCombinationForEditing
{
    /**
     * @param int $combinationId
     */
    public function __construct(int $combinationId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
