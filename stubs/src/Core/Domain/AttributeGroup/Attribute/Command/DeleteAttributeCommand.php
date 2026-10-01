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
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeConstraintException
     */
    public function __construct($attributeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
     */
    public function getAttributeId()
    {
    }
}
