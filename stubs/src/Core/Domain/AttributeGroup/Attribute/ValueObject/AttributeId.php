<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject;

/**
 * Provides identification data of Attribute
 */
final class AttributeId
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
     * @return int
     */
    public function getValue()
    {
    }
}
