<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Adds new customer address
 */
class AddCustomerAddressCommand
{
    /**
     * @param int $customerId
     * @param string $addressAlias
     * @param string $firstName
     * @param string $lastName
     * @param string $address
     * @param string $city
     * @param int $countryId
     * @param string $postcode
     * @param string $dni
     * @param string $company
     * @param string $vat_number
     * @param string $address2
     * @param int $id_state
     * @param string $phone
     * @param string $phone_mobile
     * @param string $other
     *
     * @throws CountryConstraintException
     * @throws StateConstraintException
     */
    public function __construct(int $customerId, string $addressAlias, string $firstName, string $lastName, string $address, string $city, int $countryId, string $postcode, string $dni = null, string $company = null, string $vat_number = null, string $address2 = null, int $id_state = 0, string $phone = null, ?string $phone_mobile = null, string $other = null)
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
     * @return string|null
     */
    public function getPostCode(): ?string
    {
    }
    /**
     * @return CountryId
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
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
