<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Command;

class DeleteCustomerThreadCommand
{
    public function __construct(int $customerThreadId)
    {
    }
    /**
     * @return CustomerThreadId
     */
    public function getCustomerThreadId(): \PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject\CustomerThreadId
    {
    }
}
