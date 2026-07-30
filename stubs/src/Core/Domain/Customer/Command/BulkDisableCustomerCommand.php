<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Disables customers in bulk action.
 */
class BulkDisableCustomerCommand
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
