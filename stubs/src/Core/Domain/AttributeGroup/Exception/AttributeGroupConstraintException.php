<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception;

/**
 * Is thrown when attribute group constraints are violated
 */
class AttributeGroupConstraintException extends \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupException
{
    /**
     * When attribute group Id contains invalid values
     */
    public const INVALID_ID = 10;
}
