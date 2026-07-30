<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryResult;

/**
 * Transfers customer address data for editing
 */
class EditableCustomerAddress
{
    /**
     * @param AddressId $addressId
     * @param CustomerId $customerId
     * @param string $customerEmail
     * @param string $addressAlias
     * @param string $firstName
     * @param string $lastName
     * @param string $address
     * @param string $city
     * @param CountryId $countryId
     * @param string $postCode
     * @param string $dni
     * @param string $company
     * @param string $vatNumber
     * @param string $address2
     * @param StateId $stateId
     * @param string $homePhone
     * @param string $mobilePhone
     * @param string $other
     * @param string[] $requiredFields
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId, \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId, string $customerEmail, string $addressAlias, string $firstName, string $lastName, string $address, string $city, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId, string $postCode, string $dni, string $company, string $vatNumber, string $address2, \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateIdInterface $stateId, string $homePhone, string $mobilePhone, string $other, array $requiredFields)
    {
    }
    /**
     * @return AddressId
     */
    public function getAddressId(): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
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
    public function getCustomerEmail(): string
    {
    }
    /**
     * @return string
     */
    public function getAddressAlias(): string
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
     * @return string
     */
    public function getAddress(): string
    {
    }
    /**
     * @return string
     */
    public function getCity(): string
    {
    }
    /**
     * @return CountryId
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
    /**
     * @return string[]
     */
    public function getRequiredFields(): array
    {
    }
    /**
     * @return string|null
     */
    public function getPostCode(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getDni(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
    }
    /**
     * @return StateIdInterface
     */
    public function getStateId(): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateIdInterface
    {
    }
    /**
     * @return string|null
     */
    public function getHomePhone(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getOther(): ?string
    {
    }
}
