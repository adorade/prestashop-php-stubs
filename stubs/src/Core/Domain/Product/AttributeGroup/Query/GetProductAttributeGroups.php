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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function __construct(int $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
