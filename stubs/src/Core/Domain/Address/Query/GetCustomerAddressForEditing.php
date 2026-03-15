<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Query;

/**
 * Gets customer address for editing
 */
class GetCustomerAddressForEditing
{
    /**
     * @param int $addressId
     *
     * @throws AddressConstraintException
     */
    public function __construct($addressId)
    {
    }
    /**
     * @return AddressId
     */
    public function getAddressId()
    {
    }
}
