<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Exception;

/**
 * Is thrown when adding/editing customer with missing required fields
 */
class MissingCustomerRequiredFieldsException extends \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
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
