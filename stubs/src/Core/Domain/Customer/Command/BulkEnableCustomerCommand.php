<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Enables customers in bulk action.
 */
class BulkEnableCustomerCommand
{
    /**
     * @param int[] $customerIds
     */
    public function __construct(array $customerIds)
    {
    }
    /**
     * @return CustomerId[]
     */
    public function getCustomerIds()
    {
    }
}
