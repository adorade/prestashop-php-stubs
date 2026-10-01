<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\Update;

/**
 * Deletes customization field/fields using legacy object models
 */
class CustomizationFieldDeleter
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId $customizationFieldId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId $customizationFieldId): void
    {
    }
    /**
     * @param array $customizationFieldIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception\CannotBulkDeleteCustomizationFieldException
     */
    public function bulkDelete(array $customizationFieldIds): void
    {
    }
}
