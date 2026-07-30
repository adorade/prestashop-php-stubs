<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject;

/**
 * Stores customer's plain password
 */
class Password
{
    /**
     * @var int Minimum required password length for customer
     */
    public const MIN_LENGTH = 5;
    /**
     * @var int Maximum allowed password length for customer.
     *
     * It's limited to 72 chars because of PASSWORD_BCRYPT algorithm
     * used in password_hash() function.
     */
    public const MAX_LENGTH = 72;
    /**
     * @param string $password
     */
    public function __construct($password)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
