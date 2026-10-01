<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * EditCartAddressHandler manages an address update, it then updates cart
 * relation to the newly created address.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditCartAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCartAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCustomerAddressHandlerInterface $addressHandler
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCustomerAddressHandlerInterface $addressHandler)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\CannotUpdateCartAddressException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditCartAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
