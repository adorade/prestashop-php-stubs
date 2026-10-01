<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Transforms guest (customer without password) into registered customer account
 */
class TransformGuestToCustomerCommand
{
    /**
     * @param int $customerId
     */
    public function __construct($customerId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
     */
    public function getCustomerId()
    {
    }
}
