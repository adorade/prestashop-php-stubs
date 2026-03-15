<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command;

/**
 * Deletes attributes in bulk action
 */
final class BulkDeleteAttributeCommand
{
    /**
     * @param int[] $attributeIds
     *
     * @throws AttributeConstraintException
     */
    public function __construct(array $attributeIds)
    {
    }
    /**
     * @return AttributeId[]
     */
    public function getAttributeIds()
    {
    }
}
