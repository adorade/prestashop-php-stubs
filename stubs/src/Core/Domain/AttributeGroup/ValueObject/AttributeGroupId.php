<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject;

/**
 * Provides attribute group identification data
 */
final class AttributeGroupId
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
     * @deprecated
     * @see getValue()
     *
     * @return int
     */
    public function getAttributeGroupId()
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
