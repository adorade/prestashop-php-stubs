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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressConstraintException
     */
    public function __construct($addressId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     */
    public function getAddressId()
    {
    }
}
