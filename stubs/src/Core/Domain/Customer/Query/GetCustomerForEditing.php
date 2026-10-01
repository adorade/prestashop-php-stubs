<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Query;

/**
 * Gets customer information for editing.
 */
class GetCustomerForEditing
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
