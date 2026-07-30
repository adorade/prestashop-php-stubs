<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command;

/**
 * Deletes attribute group by provided id
 */
final class DeleteAttributeGroupCommand
{
    /**
     * @param int $attributeGroupId
     *
     * @throws AttributeGroupConstraintException
     */
    public function __construct($attributeGroupId)
    {
    }
    /**
     * @return AttributeGroupId
     */
    public function getAttributeGroupId()
    {
    }
}
