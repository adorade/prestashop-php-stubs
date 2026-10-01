<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Exception;

/**
 * Thrown when an ExtraPropertyDefinition is constructed with invalid arguments.
 *
 * Replaces generic \InvalidArgumentException so callers can catch all
 * ExtraProperty-related exceptions via ExtraPropertyException when needed.
 */
class InvalidExtraPropertyDefinitionException extends \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\ExtraPropertyException
{
}
