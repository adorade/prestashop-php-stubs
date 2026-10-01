<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryResult;

class ShippingAdressSummary
{
    /**
     * InvoiceDetails constructor.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string|null $company
     * @param string|null $vatNumber
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $postalCode
     * @param string|null $stateName
     * @param string $country
     * @param string $phone
     */
    public function __construct(string $firstName, string $lastName, ?string $company, ?string $vatNumber, string $address1, string $address2, string $city, string $postalCode, ?string $stateName, string $country, string $phone)
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
    public function getCity(): string
    {
    }
    /**
     * @return string
     */
    public function getPostalCode(): string
    {
    }
    /**
     * @return string|null
     */
    public function getStateName(): ?string
    {
    }
    /**
     * @return string
     */
    public function getCountry(): string
    {
    }
    /**
     * @return string
     */
    public function getPhone(): string
    {
    }
    /**
     * @return string
     */
    public function getAddress2(): string
    {
    }
}
