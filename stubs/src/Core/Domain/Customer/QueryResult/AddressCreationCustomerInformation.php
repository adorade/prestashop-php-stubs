<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Provides customer data for address creation
 */
class AddressCreationCustomerInformation
{
    /**
     * @param int $customerId
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(int $customerId, string $firstName, string $lastName)
    {
    }
    /**
     * @return CustomerId
     */
    public function getCustomerId(): \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
    {
    }
    /**
     * @return string
     */
    public function getFirstName(): string
    {
    }
    /**
     * @return string
     */
    public function getLastName(): string
    {
    }
    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
    }
    /**
     * @param string $company
     *
     * @return AddressCreationCustomerInformation
     */
    public function setCompany(string $company): \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\AddressCreationCustomerInformation
    {
    }
}
