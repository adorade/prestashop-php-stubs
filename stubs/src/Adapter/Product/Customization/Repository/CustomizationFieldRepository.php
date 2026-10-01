<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\Repository;

/**
 * Methods to access data storage for CustomizationField
 */
class CustomizationFieldRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Product\Customization\Validate\CustomizationFieldValidator $customizationFieldValidator
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Customization\Validate\CustomizationFieldValidator $customizationFieldValidator)
    {
    }
    /**
     * This getter without specified shop is useful when the product is only fetched for deletion.
     * In which case the shopId doesn't matter we don't care about multishop content since the entity is about to be deleted.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId $fieldId
     *
     * @return \CustomizationField
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId $fieldId): \CustomizationField
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId $fieldId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \CustomizationField
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function getForShop(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId $fieldId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \CustomizationField
    {
    }
    /**
     * @param \CustomizationField $customizationField
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     * @param int $errorCode
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function add(\CustomizationField $customizationField, array $shopIds, int $errorCode = 0): \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId
    {
    }
    /**
     * @param \CustomizationField $customizationField
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception\CannotUpdateCustomizationFieldException
     */
    public function update(\CustomizationField $customizationField, array $shopIds): void
    {
    }
    /**
     * @param \CustomizationField $customizationField
     */
    public function delete(\CustomizationField $customizationField): void
    {
    }
    /**
     * @param \CustomizationField $customizationField
     */
    public function softDelete(\CustomizationField $customizationField): void
    {
    }
    /**
     * Returns the list of customization associated to a product (only their IDs), by default soft deleted entities
     * are filtered.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param bool $includeSoftDeleted
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationFieldId[]
     */
    public function getCustomizationFieldIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, bool $includeSoftDeleted = false): array
    {
    }
}
