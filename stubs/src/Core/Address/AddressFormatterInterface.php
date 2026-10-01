<?php

namespace PrestaShop\PrestaShop\Core\Address;

/**
 * Format addresses depending on the country of the address
 */
interface AddressFormatterInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId
     *
     * @return string
     */
    public function format(\PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId $addressId): string;
}
