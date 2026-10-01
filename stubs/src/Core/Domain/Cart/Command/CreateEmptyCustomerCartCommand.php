<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Creates empty cart for given customer.
 */
class CreateEmptyCustomerCartCommand
{
    /**
     * @param int $customerId Customer for which cart is being created
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
