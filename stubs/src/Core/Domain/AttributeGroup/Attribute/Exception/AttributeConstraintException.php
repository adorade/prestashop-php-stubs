<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception;

/**
 * Is thrown when attribute constraints are violated
 */
class AttributeConstraintException extends \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeException
{
    /**
     * When attribute id contains invalid values
     */
    public const INVALID_ID = 10;
    /**
     * Code is used when feature does not have name.
     */
    public const EMPTY_NAME = 20;
    /**
     * Used when feature name is invalid.
     */
    public const INVALID_NAME = 30;
    /**
     * Used when color is invalid
     */
    public const INVALID_COLOR = 40;
    /**
     * Used when attribute group id is invalid
     */
    public const INVALID_ATTRIBUTE_GROUP_ID = 50;
}
