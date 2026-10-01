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
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
     */
    public function getCustomerId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerDeleteMethod
     */
    public function getDeleteMethod()
    {
    }
}
