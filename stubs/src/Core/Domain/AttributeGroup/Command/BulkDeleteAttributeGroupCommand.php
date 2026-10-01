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
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
     */
    public function __construct(array $attributeGroupIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId[]
     */
    public function getAttributeGroupIds()
    {
    }
}
