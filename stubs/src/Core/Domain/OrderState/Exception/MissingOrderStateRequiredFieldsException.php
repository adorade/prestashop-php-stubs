<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Exception;

/**
 * Is thrown when adding/editing order state with missing required fields
 */
class MissingOrderStateRequiredFieldsException extends \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
{
    /**
     * @param string[] $missingRequiredFields
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(array $missingRequiredFields, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return string[]
     */
    public function getMissingRequiredFields()
    {
    }
}
