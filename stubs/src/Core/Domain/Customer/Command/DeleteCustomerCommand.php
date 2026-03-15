<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Deletes given customer.
 */
class DeleteCustomerCommand
{
    /**
     * @param int $customerId
     * @param string $deleteMethod
     */
    public function __construct($customerId, $deleteMethod)
    {
    }
    /**
     * @return CustomerId
     */
    public function getCustomerId()
    {
    }
    /**
     * @return CustomerDeleteMethod
     */
    public function getDeleteMethod()
    {
    }
}
