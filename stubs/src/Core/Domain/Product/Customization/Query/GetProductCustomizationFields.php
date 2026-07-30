<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\Query;

/**
 * Gets product customization fields
 */
class GetProductCustomizationFields
{
    use \PrestaShop\PrestaShop\Core\Domain\Product\Customization\CustomizationShopConstraintTrait;
    /**
     * @param int $productId
     * @param ShopConstraint $shopConstraint
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
