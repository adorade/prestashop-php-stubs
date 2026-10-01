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
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId[]
     */
    public function getCustomerIds()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerDeleteMethod
     */
    public function getDeleteMethod()
    {
    }
}
