<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\CommandHandler;

/**
 * Provides reusable methods for customer command handlers.
 *
 * @internal
 */
abstract class AbstractCustomerHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId
     * @param \Customer $customer
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerNotFoundException
     */
    protected function assertCustomerWasFound(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId, \Customer $customer)
    {
    }
    /**
     * @param \Customer $customer
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\MissingCustomerRequiredFieldsException
     */
    protected function assertRequiredFieldsAreNotMissing(\Customer $customer)
    {
    }
}
