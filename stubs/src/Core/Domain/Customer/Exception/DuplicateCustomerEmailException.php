<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Exception;

/**
 * Exception is thrown when email which already exists is being used to create or update other customer
 */
class DuplicateCustomerEmailException extends \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
{
    /**
     * @var int Code is used when the check fails during adding the customer
     */
    public const ADD = 1;
    /**
     * @var int Code is used when the check fails during editing the customer
     */
    public const EDIT = 2;
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email $email
     * @param string $message
     * @param int $code
     * @param null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\ValueObject\Email $email, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email
     */
    public function getEmail()
    {
    }
}
