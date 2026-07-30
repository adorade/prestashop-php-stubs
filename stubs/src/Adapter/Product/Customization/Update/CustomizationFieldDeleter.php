<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\Update;

/**
 * Deletes customization field/fields using legacy object models
 */
class CustomizationFieldDeleter
{
    /**
     * @param CustomizationFieldRepository $customizationFieldRepository
     * @param ProductRepository $productRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param CustomizationFieldId $customizationFieldId
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId $customizationFieldId): void
    {
    }
    /**
     * @param array $customizationFieldIds
     *
     * @throws CannotBulkDeleteCustomizationFieldException
     */
    public function bulkDelete(array $customizationFieldIds): void
    {
    }
}
