<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Command;

/**
 * Updates customer thread with given status
 */
class UpdateCustomerThreadStatusCommand
{
    /**
     * @param int $customerThreadId
     * @param string $newCustomerThreadStatus
     */
    public function __construct($customerThreadId, $newCustomerThreadStatus)
    {
    }
    /**
     * @return CustomerThreadId
     */
    public function getCustomerThreadId()
    {
    }
    /**
     * @return CustomerThreadStatus
     */
    public function getCustomerThreadStatus()
    {
    }
}
