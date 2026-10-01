<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\Repository;

/**
 * Provides access to attribute data source
 */
class AttributeRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId $attributeId
     *
     * @return \ProductAttribute
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId $attributeId): \ProductAttribute
    {
    }
    public function assertAttributeExists(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId $attributeId): void
    {
    }
    /**
     * @param \ProductAttribute $attribute
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function add(\ProductAttribute $attribute): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
    {
    }
    public function partialUpdate(\ProductAttribute $attribute, array $propertiesToUpdate, int $errorCode = 0): void
    {
    }
    /**
     * @param int[] $attributeIds
     */
    public function assertAllAttributesExist(array $attributeIds): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId[] $attributeGroupIds
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId[] $attributeIds get only certain attributes (e.g. when need to get only certain combinations attributes)
     *
     * @return array<int, array<int, \ProductAttribute>> arrays of product attributes indexed by product attribute groups
     */
    public function getGroupedAttributes(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $attributeGroupIds, array $attributeIds = []): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[] $combinationIds
     * @param \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $langId
     *
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CombinationAttributeInformation[]>
     */
    public function getAttributesInfoByCombinationIds(array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $langId): array
    {
    }
    /**
     * Asserts that attribute exists in all the provided shops.
     * If at least one of them is missing in any shop, it throws exception.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId[] $attributeIds
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
     */
    public function assertExistsInEveryShop(array $attributeIds, array $shopIds): void
    {
    }
    /**
     * @param int[] $attributeIds
     * @param int $langId
     *
     * @return array<int, array<string, mixed>>
     */
    public function getAttributesInfoByAttributeIds(array $attributeIds, int $langId): array
    {
    }
    /**
     * Retrieve attributes with values (id, name).
     *
     * @param int $languageId
     * @param int[] $shopIds
     *
     * @return array<int, array{attribute_group_id: int, name: string, values: array<int, array{item_id: int, name: string}>}>
     */
    public function getAttributesWithValues(int $languageId, array $shopIds = []): array
    {
    }
}
