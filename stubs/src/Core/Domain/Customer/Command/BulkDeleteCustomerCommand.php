<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Deletes given customers.
 */
class BulkDeleteCustomerCommand
{
    /**
     * @param int[] $customerIds
     * @param string $deleteMethod
     */
    public function __construct(array $customerIds, $deleteMethod)
    {
    }
    /**
     * @return CustomerId[]
     */
    public function getCustomerIds()
    {
    }
    /**
     * @return CustomerDeleteMethod
     */
    public function getDeleteMethod()
    {
    }
}
