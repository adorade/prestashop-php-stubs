<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject;

/**
 * Status that customer thread can have
 */
final class CustomerThreadStatus
{
    public const OPEN = 'open';
    public const CLOSED = 'closed';
    public const PENDING_1 = 'pending1';
    public const PENDING_2 = 'pending2';
    /**
     * @param string $status
     */
    public function __construct($status)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
