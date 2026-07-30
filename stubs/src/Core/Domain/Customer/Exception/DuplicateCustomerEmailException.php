<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Exception;

/**
 * Exception is thrown when email which already exists is being used to create or update other customer
 */
class DuplicateCustomerEmailException extends \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
{
    /**
     * @param Email $email
     * @param string $message
     * @param int $code
     * @param null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\ValueObject\Email $email, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return Email
     */
    public function getEmail()
    {
    }
}
