<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Query;

/**
 * Gets customer information for address creation.
 */
class GetCustomerForAddressCreation
{
    /**
     * Query is used for customer search so email string might not be complete so no email validation
     *
     * @param string $customerEmail
     */
    public function __construct(string $customerEmail)
    {
    }
    /**
     * @return string
     */
    public function getCustomerEmail(): string
    {
    }
}
