<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command;

/**
 * Deletes attribute groups in bulk action by provided ids
 */
final class BulkDeleteAttributeGroupCommand
{
    /**
     * @param int[] $attributeGroupIds
     *
     * @throws AttributeGroupConstraintException
     */
    public function __construct(array $attributeGroupIds)
    {
    }
    /**
     * @return AttributeGroupId[]
     */
    public function getAttributeGroupIds()
    {
    }
}
