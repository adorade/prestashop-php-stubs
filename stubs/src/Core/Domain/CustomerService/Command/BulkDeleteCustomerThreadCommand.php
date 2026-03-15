<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Command;

class BulkDeleteCustomerThreadCommand
{
    /**
     * @param array<int, int> $customerThreadIds
     *
     * @throws CustomerServiceException
     */
    public function __construct(array $customerThreadIds)
    {
    }
    /**
     * @return CustomerThreadId[]
     */
    public function getCustomerThreadIds(): array
    {
    }
}
