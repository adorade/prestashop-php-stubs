<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query;

/**
 * Get list of Attribute groups in the shop with their associated attributes
 */
class GetAttributeGroupList
{
    /**
     * @param ShopConstraint $shopConstraint
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
