<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

/**
 * @deprecated Since 1.7.7.5 and will be removed in the next major.
 */
class OrderShippingAddressForViewing
{
    /**
     * @param int $addressId
     * @param string $firstName
     * @param string $lastName
     * @param string $companyName
     * @param string $address1
     * @param string $address2
     * @param string $stateName
     * @param string $cityName
     * @param string $countryName
     * @param string $postCode
     * @param string $phone
     * @param string $phoneMobile
     * @param string|null $vatNumber
     * @param string|null $dni If null the DNI is not required for the country, else string
     */
    public function __construct(int $addressId, string $firstName, string $lastName, string $companyName, string $address1, string $address2, string $stateName, string $cityName, string $countryName, string $postCode, string $phone, string $phoneMobile, ?string $vatNumber = null, ?string $dni = null)
    {
    }
    /**
     * @return int
     */
    public function getAddressId(): int
    {
    }
    /**
     * @return string
     */
    public function getFullName(): string
    {
    }
    /**
     * @return string
     */
    public function getCompanyName(): string
    {
    }
    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
    }
    /**
     * @return string
     */
    public function getAddress1(): string
    {
    }
    /**
     * @return string
     */
    public function getAddress2(): string
    {
    }
    /**
     * @return string
     */
    public function getCityName(): string
    {
    }
    /**
     * If null the DNI is not required for the country, else string
     *
     * @return string|null
     */
    public function getDni(): ?string
    {
    }
    /**
     * @return string
     */
    public function getStateName(): string
    {
    }
    /**
     * @return string
     */
    public function getCountryName(): string
    {
    }
    /**
     * @return string
     */
    public function getPostCode(): string
    {
    }
    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
    }
    /**
     * @return string
     */
    public function getMobilePhoneNumber(): string
    {
    }
}
