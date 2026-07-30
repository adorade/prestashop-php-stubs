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
     * @throws AttributeConstraintException
     * @throws AttributeGroupConstraintException
     */
    public function __construct(int $attributeGroupId, array $attributeIds)
    {
    }
    /**
     * @return AttributeGroupId
     */
    public function getAttributeGroupId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
    /**
     * @return AttributeId[]
     */
    public function getAttributeIds(): array
    {
    }
}
