<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * EditOrderAddressCommandHandler manages an address update, it then updates order and cart
 * relation to the newly created address.
 */
class EditOrderAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditOrderAddressHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCustomerAddressHandlerInterface $addressHandler
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderDeliveryAddressHandlerInterface $deliveryAddressHandler
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderInvoiceAddressHandlerInterface $invoiceAddressHandler
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCustomerAddressHandlerInterface $addressHandler, \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderDeliveryAddressHandlerInterface $deliveryAddressHandler, \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderInvoiceAddressHandlerInterface $invoiceAddressHandler)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\CannotUpdateOrderAddressException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditOrderAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
