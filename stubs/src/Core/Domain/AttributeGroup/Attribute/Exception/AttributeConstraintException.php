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
}
