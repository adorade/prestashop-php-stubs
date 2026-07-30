<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\Update;

/**
 * Updates CustomizationField & Product relation
 */
class ProductCustomizationFieldUpdater
{
    /**
     * @param CustomizationFieldRepository $customizationFieldRepository
     * @param CustomizationFieldDeleter $customizationFieldDeleter
     * @param ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository, \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter $customizationFieldDeleter, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param ProductId $productId
     * @param LegacyCustomizationField[] $customizationFields
     * @param ShopConstraint $shopConstraint
     */
    public function setProductCustomizationFields(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $customizationFields, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ProductId $productId
     */
    public function refreshProductCustomizability(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
}
