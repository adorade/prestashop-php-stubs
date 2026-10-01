<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Command;

class BulkDeleteCustomerThreadCommand
{
    /**
     * @param array<int, int> $customerThreadIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CustomerService\Exception\CustomerServiceException
     */
    public function __construct(array $customerThreadIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject\CustomerThreadId[]
     */
    public function getCustomerThreadIds(): array
    {
    }
}
