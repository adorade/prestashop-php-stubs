<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Query;

/**
 * Query for retrieving last empty cart for customer
 */
class GetLastEmptyCustomerCart
{
    /**
     * @param int $customerId
     */
    public function __construct(int $customerId)
    {
    }
    /**
     * @return CustomerId
     */
    public function getCustomerId(): \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
    {
    }
}
