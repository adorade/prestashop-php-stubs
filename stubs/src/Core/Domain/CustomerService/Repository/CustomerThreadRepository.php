<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Repository;

/**
 * Methods to access data storage for customerThread
 */
class CustomerThreadRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @throws CustomerThreadNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject\CustomerThreadId $customerThreadId): \CustomerThread
    {
    }
    /**
     * @throws CannotDeleteCustomerThreadException
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject\CustomerThreadId $customerThreadId): void
    {
    }
}
