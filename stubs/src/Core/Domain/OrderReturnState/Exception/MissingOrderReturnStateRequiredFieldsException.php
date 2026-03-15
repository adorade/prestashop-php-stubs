<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception;

/**
 * Is thrown when adding/editing order return state with missing required fields
 */
class MissingOrderReturnStateRequiredFieldsException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateException
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
