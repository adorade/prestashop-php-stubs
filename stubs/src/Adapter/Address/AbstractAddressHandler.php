<?php

namespace PrestaShop\PrestaShop\Adapter\Address;

/**
 * Provides reusable methods for address command/query handlers
 */
abstract class AbstractAddressHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId
     *
     * @return \Address
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressNotFoundException
     */
    protected function getAddress(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId)
    {
    }
    /**
     * Deletes legacy Address
     *
     * @param \Address $address
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
     */
    protected function deleteAddress(\Address $address): bool
    {
    }
    /**
     * @param \Address $address
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\InvalidAddressFieldException
     * @throws \PrestaShopException
     */
    protected function validateAddress(\Address $address): void
    {
    }
}
