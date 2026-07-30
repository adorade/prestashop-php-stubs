<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryResult;

/**
 * Transfers manufacturer address data for editing
 */
class EditableManufacturerAddress
{
    /**
     * @param AddressId $addressId
     * @param string $lastName
     * @param string $firstName
     * @param string $address
     * @param string $city
     * @param int $manufacturerId
     * @param int $countryId
     * @param string $address2
     * @param string $postCode
     * @param int $stateId
     * @param string $homePhone
     * @param string $mobilePhone
     * @param string $other
     * @param string $dni
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId, $lastName, $firstName, $address, $city, $manufacturerId, $countryId, $address2 = null, $postCode = null, $stateId = null, $homePhone = null, $mobilePhone = null, $other = null, $dni = null)
    {
    }
    /**
     * @return AddressId
     */
    public function getAddressId()
    {
    }
    /**
     * @return int
     */
    public function getManufacturerId()
    {
    }
    /**
     * @return string
     */
    public function getLastName()
    {
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
    }
    /**
     * @return string
     */
    public function getAddress()
    {
    }
    /**
     * @return string
     */
    public function getCity()
    {
    }
    /**
     * @return string
     */
    public function getAddress2()
    {
    }
    /**
     * @return int
     */
    public function getCountryId()
    {
    }
    /**
     * @return string
     */
    public function getPostCode()
    {
    }
    /**
     * @return int
     */
    public function getStateId()
    {
    }
    /**
     * @return string
     */
    public function getHomePhone()
    {
    }
    /**
     * @return string
     */
    public function getMobilePhone()
    {
    }
    /**
     * @return string
     */
    public function getOther()
    {
    }
    /**
     * @return string
     */
    public function getDni()
    {
    }
}
