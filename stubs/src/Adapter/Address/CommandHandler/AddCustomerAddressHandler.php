<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

final class AddCustomerAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\AddCustomerAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\CannotAddAddressException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\AddCustomerAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
