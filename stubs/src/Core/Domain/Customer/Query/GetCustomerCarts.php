<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Query;

/**
 * Query for getting summarized customer carts
 */
class GetCustomerCarts
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
