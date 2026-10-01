<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository;

class AttributeGroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(private \Doctrine\DBAL\Connection $connection, private string $dbPrefix)
    {
    }
    /**
     * @param \AttributeGroup $attributeGroup
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function add(\AttributeGroup $attributeGroup): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
    public function partialUpdate(\AttributeGroup $attribute, array $propertiesToUpdate, int $errorCode = 0): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId $attributeGroupId
     *
     * @return \AttributeGroup
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopAssociationNotFound
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId $attributeGroupId): \AttributeGroup
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
