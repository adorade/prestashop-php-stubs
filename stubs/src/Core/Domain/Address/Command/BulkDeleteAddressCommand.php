<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Deletes addresses in bulk action
 */
class BulkDeleteAddressCommand
{
    /**
     * @param int[] $addressIds
     *
     * @throws AddressConstraintException
     */
    public function __construct($addressIds)
    {
    }
    /**
     * @return AddressId[]
     */
    public function getAdressIds()
    {
    }
}
