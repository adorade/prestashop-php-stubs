<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\Exception;

/**
 * Is thrown when adding/editing zone with missing required fields
 */
class MissingZoneRequiredFieldsException extends \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneException
{
    /**
     * @param array $missingRequiredFields
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(array $missingRequiredFields, $message = '', $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return string[]
     */
    public function getMissingRequiredFields(): array
    {
    }
}
