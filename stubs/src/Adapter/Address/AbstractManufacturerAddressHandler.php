<?php

namespace PrestaShop\PrestaShop\Adapter\Address;

/**
 * Provides reusable methods for manufacturer address address command/query handlers
 *
 * @deprecated Since 1.7.7 Use AbstractAddressHandler instead
 */
abstract class AbstractManufacturerAddressHandler
{
    /**
     * Gets legacy Address
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId
     *
     * @return \Address
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressNotFoundException
     */
    protected function getAddress(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId)
    {
    }
}
