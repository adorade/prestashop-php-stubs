<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Command responsible for holding edits customer address data
 */
class EditCustomerAddressCommand extends \PrestaShop\PrestaShop\Core\Domain\Address\Command\AbstractEditAddressCommand
{
    /**
     * @param int $addressId
     *
     * @throws AddressConstraintException
     */
    public function __construct(int $addressId)
    {
    }
    /**
     * @return AddressId
     */
    public function getAddressId(): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
