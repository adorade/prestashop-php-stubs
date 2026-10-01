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
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId[]
     */
    public function getCustomerIds()
    {
    }
}
