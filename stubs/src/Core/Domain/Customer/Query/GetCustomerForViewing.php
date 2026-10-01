<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Query;

/**
 * Gets detailed customer information for viewing in Back Office.
 */
class GetCustomerForViewing
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
