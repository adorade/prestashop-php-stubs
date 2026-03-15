<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Adds new address
 */
class AddManufacturerAddressCommand
{
    /**
     * @param string $lastName
     * @param string $firstName
     * @param string $address
     * @param int|null $countryId
     * @param string $city
     * @param int $manufacturerId
     * @param string|null $address2
     * @param string|null $postCode
     * @param int|null $stateId
     * @param string|null $homePhone
     * @param string $mobilePhone
     * @param string|null $other
     * @param string|null $dni
     *
     * @throws AddressConstraintException
     */
    public function __construct($lastName, $firstName, $address, $countryId, $city, $manufacturerId = null, $address2 = null, $postCode = null, $stateId = null, $homePhone = null, $mobilePhone = null, $other = null, $dni = null)
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
     * @return string|null
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
     * @return string|null
     */
    public function getPostCode()
    {
    }
    /**
     * @return int|null
     */
    public function getStateId()
    {
    }
    /**
     * @return string|null
     */
    public function getHomePhone()
    {
    }
    /**
     * @return string|null
     */
    public function getMobilePhone()
    {
    }
    /**
     * @return string|null
     */
    public function getOther()
    {
    }
    /**
     * @return string|null
     */
    public function getDni()
    {
    }
}
