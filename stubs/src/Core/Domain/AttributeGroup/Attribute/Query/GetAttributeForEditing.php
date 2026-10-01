<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Query;

/**
 * Retrieves attribute group data for editing
 */
class GetAttributeForEditing
{
    /**
     * @param int $attributeId
     */
    public function __construct(int $attributeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
     */
    public function getAttributeId(): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
    {
    }
}
