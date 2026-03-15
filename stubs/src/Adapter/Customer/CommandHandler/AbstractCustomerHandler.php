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
     * @param CustomerId $customerId
     * @param Customer $customer
     *
     * @throws CustomerNotFoundException
     */
    protected function assertCustomerWasFound(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId, \Customer $customer)
    {
    }
    /**
     * @param Customer $customer
     *
     * @throws MissingCustomerRequiredFieldsException
     */
    protected function assertRequiredFieldsAreNotMissing(\Customer $customer)
    {
    }
}
