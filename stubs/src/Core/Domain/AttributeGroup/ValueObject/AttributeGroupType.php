<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject;

/**
 * Defines Attribute group type with its constraints.
 */
class AttributeGroupType
{
    public const ATTRIBUTE_GROUP_TYPE_SELECT = 'select';
    public const ATTRIBUTE_GROUP_TYPE_RADIO = 'radio';
    public const ATTRIBUTE_GROUP_TYPE_COLOR = 'color';
    /**
     * @param string $type
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\InvalidAttributeGroupTypeException
     */
    public function __construct(string $type)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
