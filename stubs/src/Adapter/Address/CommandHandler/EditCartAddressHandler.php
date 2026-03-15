<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * EditCartAddressHandler manages an address update, it then updates cart
 * relation to the newly created address.
 */
class EditCartAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCartAddressHandlerInterface
{
    /**
     * @param EditCustomerAddressHandlerInterface $addressHandler
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCustomerAddressHandlerInterface $addressHandler)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws AddressConstraintException
     * @throws CannotUpdateCartAddressException
     * @throws CountryConstraintException
     * @throws StateConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCartAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
