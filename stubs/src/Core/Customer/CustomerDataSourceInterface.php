<?php

namespace PrestaShop\PrestaShop\Core\Customer;

interface CustomerDataSourceInterface
{
    /**
     * @param string $email
     *
     * @return bool
     */
    public function hasCustomerWithEmail(string $email): bool;
}
