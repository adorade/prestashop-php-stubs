<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\AttributeGroup\Query;

/**
 * Query which provides attributes of a Product by group
 */
class GetProductAttributeGroups
{
    /**
     * @param int $productId
     *
     * @throws ProductConstraintException
     */
    public function __construct(int $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
