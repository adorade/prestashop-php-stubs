<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Deletes Address
 */
class DeleteAddressCommand
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
