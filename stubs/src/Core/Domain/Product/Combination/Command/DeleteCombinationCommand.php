<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

class DeleteCombinationCommand
{
    /**
     * @param int $combinationId
     * @param ShopConstraint $shopConstraint
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
