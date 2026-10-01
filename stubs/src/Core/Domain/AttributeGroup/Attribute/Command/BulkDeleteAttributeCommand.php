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
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeConstraintException
     */
    public function __construct(array $attributeIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId[]
     */
    public function getAttributeIds()
    {
    }
}
