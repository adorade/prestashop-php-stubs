<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository;

class AttributeGroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId[] $attributeGroupIds get only certain attribute groups (e.g. when need to get only certain combinations attributes groups)
     *
     * @return array<int, \AttributeGroup> array key is the id of attribute group
     */
    public function getAttributeGroups(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, array $attributeGroupIds = []): array
    {
    }
    /**
     * Asserts that attribute groups exists in all the provided shops.
     * If at least one of them is missing in any shop, it throws exception.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId[] $attributeGroupIds
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
     */
    public function assertExistsInEveryShop(array $attributeGroupIds, array $shopIds): void
    {
    }
}
