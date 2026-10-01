<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * Handles update of customer address
 */
final class EditCustomerAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCustomerAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\CannotUpdateAddressException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCustomerAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
