<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\Repository;

/**
 * Provides access to attribute data source
 */
class AttributeRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param int[] $attributeIds
     */
    public function assertAllAttributesExist(array $attributeIds): void
    {
    }
    /**
     * @param ShopConstraint $shopConstraint
     * @param AttributeGroupId[] $attributeGroupIds
     * @param AttributeId[] $attributeIds get only certain attributes (e.g. when need to get only certain combinations attributes)
     *
     * @return array<int, array<int, ProductAttribute>> arrays of product attributes indexed by product attribute groups
     */
    public function getGroupedAttributes(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $attributeGroupIds, array $attributeIds = []): array
    {
    }
    /**
     * @param CombinationId[] $combinationIds
     * @param LanguageId $langId
     *
     * @return array<int, CombinationAttributeInformation[]>
     */
    public function getAttributesInfoByCombinationIds(array $combinationIds, \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $langId): array
    {
    }
    /**
     * Asserts that attribute exists in all the provided shops.
     * If at least one of them is missing in any shop, it throws exception.
     *
     * @param AttributeId[] $attributeIds
     * @param ShopId[] $shopIds
     *
     * @throws ShopAssociationNotFound
     */
    public function assertExistsInEveryShop(array $attributeIds, array $shopIds): void
    {
    }
}
