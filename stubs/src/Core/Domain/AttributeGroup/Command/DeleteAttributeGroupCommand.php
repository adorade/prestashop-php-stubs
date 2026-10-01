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
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
     */
    public function __construct($attributeGroupId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
     */
    public function getAttributeGroupId()
    {
    }
}
