<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Query;

/**
 * Gets customer thread for viewing
 */
class GetCustomerThreadForViewing
{
    /**
     * @param int $customerThreadId
     */
    public function __construct($customerThreadId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject\CustomerThreadId
     */
    public function getCustomerThreadId()
    {
    }
}
