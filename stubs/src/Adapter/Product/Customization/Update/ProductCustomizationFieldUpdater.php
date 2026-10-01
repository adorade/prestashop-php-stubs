<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\Update;

/**
 * Updates CustomizationField & Product relation
 */
class ProductCustomizationFieldUpdater
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository
     * @param CustomizationFieldDeleter $customizationFieldDeleter
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository, \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter $customizationFieldDeleter, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \CustomizationField[] $customizationFields
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     */
    public function setProductCustomizationFields(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $customizationFields, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     */
    public function refreshProductCustomizability(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
}
