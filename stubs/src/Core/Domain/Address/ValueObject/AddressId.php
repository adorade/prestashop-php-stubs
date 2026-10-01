<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\ValueObject;

/**
 * Provides address id
 */
class AddressId
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
     * @return int
     */
    public function getValue()
    {
    }
}
