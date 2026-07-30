<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Query;

/**
 * Get Product data necessary for editing
 */
class GetProductForEditing
{
    /**
     * @param int $productId
     * @param ShopConstraint $shopConstraint
     * @param int $displayLanguageId
     */
    public function __construct(int $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, int $displayLanguageId)
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
    /**
     * @return LanguageId
     */
    public function getDisplayLanguageId(): \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
    {
    }
}
