<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception;

/**
 * Base exception for extra property domain operations.
 *
 * Thrown when an extra property command or query cannot be fulfilled
 * (e.g. invalid entity name, entity not found, write failure).
 */
class ExtraPropertyException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
}
