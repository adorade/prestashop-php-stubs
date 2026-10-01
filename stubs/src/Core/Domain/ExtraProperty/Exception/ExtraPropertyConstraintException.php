<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception;

/**
 * Thrown when an extra property definition input fails a structural constraint.
 */
class ExtraPropertyConstraintException extends \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyException
{
    /**
     * Thrown when the provided definition id is not a positive integer.
     */
    public const INVALID_ID = 1;
    /**
     * Thrown when the entity name contains invalid characters.
     */
    public const INVALID_ENTITY_NAME = 2;
    /**
     * Thrown when the property name contains invalid characters.
     */
    public const INVALID_PROPERTY_NAME = 3;
    /**
     * Thrown when the validation constraints DSL cannot be parsed (unknown constraint, malformed
     * token, unsupported option or value). The message lists every rejected line.
     */
    public const INVALID_CONSTRAINTS = 4;
}
