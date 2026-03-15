<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

/**
 * Generates attribute combinations for product
 */
class GenerateProductCombinationsCommand
{
    /**
     * @param int $productId
     * @param array<int, array<int>> $groupedAttributeIds key-value pairs where key is the attribute group id and value is the list of that group attribute ids
     * @param ShopConstraint $shopConstraint
     */
    public function __construct(int $productId, array $groupedAttributeIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return array
     */
    public function getGroupedAttributeIdsList(): array
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
