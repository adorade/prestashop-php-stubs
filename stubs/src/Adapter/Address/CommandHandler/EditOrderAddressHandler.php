<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * EditOrderAddressCommandHandler manages an address update, it then updates order and cart
 * relation to the newly created address.
 */
class EditOrderAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditOrderAddressHandlerInterface
{
    /**
     * @param EditCustomerAddressHandlerInterface $addressHandler
     * @param ChangeOrderDeliveryAddressHandlerInterface $deliveryAddressHandler
     * @param ChangeOrderInvoiceAddressHandlerInterface $invoiceAddressHandler
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\EditCustomerAddressHandlerInterface $addressHandler, \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderDeliveryAddressHandlerInterface $deliveryAddressHandler, \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\ChangeOrderInvoiceAddressHandlerInterface $invoiceAddressHandler)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws AddressConstraintException
     * @throws CannotUpdateOrderAddressException
     * @throws CountryConstraintException
     * @throws StateConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\EditOrderAddressCommand $command): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
