<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Interface for service that handles command which adds new customer address
 */
interface AddCustomerAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Command\AddCustomerAddressCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\AddCustomerAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId;
}
