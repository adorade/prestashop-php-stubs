<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Repository;

/**
 * Provides methods to access Customer data storage
 */
class CustomerRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId
     *
     * @return \Customer
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId): \Customer
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerNotFoundException
     */
    public function assertCustomerExists(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId): void
    {
    }
}
