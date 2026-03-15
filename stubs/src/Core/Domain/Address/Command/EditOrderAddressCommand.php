<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Class EditOrderAddressCommand used to edit an order address and then update the related field
 * so that it uses the new duplicated address.
 */
class EditOrderAddressCommand extends \PrestaShop\PrestaShop\Core\Domain\Address\Command\AbstractEditAddressCommand
{
    public const ALLOWED_ADDRESS_TYPES = [\PrestaShop\PrestaShop\Core\Domain\Order\OrderAddressType::INVOICE_ADDRESS_TYPE, \PrestaShop\PrestaShop\Core\Domain\Order\OrderAddressType::DELIVERY_ADDRESS_TYPE];
    /**
     * @param int $orderId
     * @param string $addressType
     *
     * @throws InvalidAddressTypeException
     * @throws OrderException
     */
    public function __construct(int $orderId, string $addressType)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return string
     */
    public function getAddressType()
    {
    }
}
