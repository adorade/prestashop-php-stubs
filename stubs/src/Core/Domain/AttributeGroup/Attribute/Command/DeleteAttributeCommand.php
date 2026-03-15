<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command;

/**
 * Deletes Attribute by provided id
 */
final class DeleteAttributeCommand
{
    /**
     * @param int $attributeId
     *
     * @throws AttributeConstraintException
     */
    public function __construct($attributeId)
    {
    }
    /**
     * @return AttributeId
     */
    public function getAttributeId()
    {
    }
}
