<?php

namespace PrestaShop\PrestaShop\Adapter\Customer;

final class CustomerDataSource implements \PrestaShop\PrestaShop\Core\Customer\CustomerDataSourceInterface
{
    /**
     * {@inheritdoc}
     */
    public function hasCustomerWithEmail(string $email): bool
    {
    }
}
