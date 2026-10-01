<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

/**
 * DTO for order invoice details
 *
 * @deprecated Since 1.7.7.5 and will be removed in the next major.
 */
class OrderPreviewInvoiceDetails
{
    /**
     * InvoiceDetails constructor.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $company
     * @param string|null $vatNumber
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $postalCode
     * @param string|null $stateName
     * @param string $country
     * @param string|null $email
     * @param string $phone
     * @param string|null $dni
     */
    public function __construct(string $firstName, string $lastName, ?string $company, ?string $vatNumber, string $address1, string $address2, string $city, string $postalCode, ?string $stateName, string $country, ?string $email, string $phone, ?string $dni = null)
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
    public function getCountry(): string
    {
    }
    /**
     * @return string|null
     */
    public function getEmail(): ?string
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
    /**
     * @return string
     */
    public function getCompany(): string
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
     * @return string|null
     */
    public function getDNI(): ?string
    {
    }
}
