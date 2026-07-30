<?php

namespace PrestaShop\PrestaShop\Adapter\Address;

/**
 * Provides reusable methods for address command/query handlers
 */
abstract class AbstractAddressHandler
{
    /**
     * @param AddressId $addressId
     *
     * @return Address
     *
     * @throws AddressException
     * @throws AddressNotFoundException
     */
    protected function getAddress(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId)
    {
    }
    /**
     * Deletes legacy Address
     *
     * @param Address $address
     *
     * @return bool
     *
     * @throws AddressException
     */
    protected function deleteAddress(\Address $address): bool
    {
    }
    /**
     * @param Address $address
     *
     * @throws InvalidAddressFieldException
     * @throws PrestaShopException
     */
    protected function validateAddress(\Address $address): void
    {
    }
}
