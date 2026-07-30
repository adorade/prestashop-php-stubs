<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository;

class AttributeGroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param ShopConstraint $shopConstraint
     * @param AttributeGroupId[] $attributeGroupIds get only certain attribute groups (e.g. when need to get only certain combinations attributes groups)
     *
     * @return array<int, AttributeGroup> array key is the id of attribute group
     */
    public function getAttributeGroups(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $attributeGroupIds = []): array
    {
    }
    /**
     * Asserts that attribute groups exists in all the provided shops.
     * If at least one of them is missing in any shop, it throws exception.
     *
     * @param AttributeGroupId[] $attributeGroupIds
     * @param ShopId[] $shopIds
     *
     * @throws ShopAssociationNotFound
     */
    public function assertExistsInEveryShop(array $attributeGroupIds, array $shopIds): void
    {
    }
}
