<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject;

/**
 * Defines types of thread messages
 */
final class CustomerThreadMessageType
{
    /**
     * When message is written by employee
     */
    public const EMPLOYEE = 'employee';
    /**
     * When message is written by customer
     */
    public const CUSTOMER = 'customer';
}
