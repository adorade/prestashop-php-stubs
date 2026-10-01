<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Exception;

/**
 * Is thrown when customer constraint is violated
 */
class CustomerConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
{
    /**
     * @var int Code is used when invalid email is provided for customer
     */
    public const INVALID_EMAIL = 1;
    /**
     * @var int Code is used when invalid first name is provided for customer
     */
    public const INVALID_FIRST_NAME = 2;
    /**
     * @var int Code is used when invalid last name is provided for customer
     */
    public const INVALID_LAST_NAME = 3;
    /**
     * @var int Code is used when invalid password is provided for customer
     */
    public const INVALID_PASSWORD = 4;
    /**
     * @var int Code is used when invalid APE code is provided
     */
    public const INVALID_APE_CODE = 5;
    /**
     * @var int Is used when invalid (not string) private note is provided as private note
     */
    public const INVALID_PRIVATE_NOTE = 6;
    /**
     * @var int Code is used when invalid customer birthday is provided
     */
    public const INVALID_BIRTHDAY = 7;
    /**
     * When customer id value is invalid
     */
    public const INVALID_ID = 8;
}
