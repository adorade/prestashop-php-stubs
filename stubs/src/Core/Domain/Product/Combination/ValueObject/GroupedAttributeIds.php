<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject;

/**
 * Combines value objects into a valid structure for generating combinations
 */
class GroupedAttributeIds
{
    /**
     * @param int $attributeGroupId
     * @param array $attributeIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
     */
    public function __construct(int $attributeGroupId, array $attributeIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
     */
    public function getAttributeGroupId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId[]
     */
    public function getAttributeIds(): array
    {
    }
}
