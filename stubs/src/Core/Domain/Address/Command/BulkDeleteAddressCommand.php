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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressConstraintException
     */
    public function __construct($addressIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId[]
     */
    public function getAdressIds()
    {
    }
}
