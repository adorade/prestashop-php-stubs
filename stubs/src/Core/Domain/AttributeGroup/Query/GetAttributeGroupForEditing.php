<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Query;

/**
 * Retrieves attribute group data for editing
 */
class GetAttributeGroupForEditing
{
    /**
     * @param int $attributeGroupId
     */
    public function __construct(int $attributeGroupId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
     */
    public function getAttributeGroupId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
}
