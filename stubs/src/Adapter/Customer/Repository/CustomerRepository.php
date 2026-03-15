<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Repository;

/**
 * Provides methods to access Customer data storage
 */
class CustomerRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param CustomerId $customerId
     *
     * @return Customer
     *
     * @throws CustomerNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId): \Customer
    {
    }
    /**
     * @param CustomerId $customerId
     *
     * @throws CustomerNotFoundException
     */
    public function assertCustomerExists(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId): void
    {
    }
}
