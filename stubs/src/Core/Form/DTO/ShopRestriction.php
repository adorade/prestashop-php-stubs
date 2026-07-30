<?php

namespace PrestaShop\PrestaShop\Core\Form\DTO;

/**
 * Shop restriction object holds the shop ids for which restriction is being applied and the fields which are impacted
 * by the certain shop restriction.
 */
class ShopRestriction
{
    /**
     * @param int[] $shopIds
     * @param ShopRestrictionField[] $shopRestrictionFields
     */
    public function __construct(array $shopIds, array $shopRestrictionFields)
    {
    }
    /**
     * @return int[]
     */
    public function getShopIds()
    {
    }
    /**
     * @return ShopRestrictionField[]
     */
    public function getShopRestrictionFields()
    {
    }
}
