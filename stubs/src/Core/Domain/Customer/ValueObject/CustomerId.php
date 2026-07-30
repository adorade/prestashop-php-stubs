<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject;

/**
 * Defines Customer ID with it's constraints
 */
class CustomerId implements \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerIdInterface
{
    /**
     * @param int $customerId
     */
    public function __construct(int $customerId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
