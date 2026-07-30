<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject;

/**
 * Stores method in which customer can be deleted.
 */
class CustomerDeleteMethod
{
    /**
     * If this option is used, then deleted customer can register again using same email.
     */
    public const ALLOW_CUSTOMER_REGISTRATION = 'allow_registration_after';
    /**
     * If this option is used, then deleted customer won't be able to register again using same email.
     */
    public const DENY_CUSTOMER_REGISTRATION = 'deny_registration_after';
    /**
     * @param string $method
     *
     * @throws CustomerException
     */
    public function __construct($method)
    {
    }
    /**
     * Check if customer can register after it's deletion.
     */
    public function isAllowedToRegisterAfterDelete()
    {
    }
    /**
     * @return string[]
     */
    public static function getAvailableMethods()
    {
    }
}
