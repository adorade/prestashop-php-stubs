<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Changes invoice address for given order.
 */
class ChangeOrderInvoiceAddressCommand
{
    /**
     * @param int $orderId
     * @param int $newInvoiceAddressId
     */
    public function __construct($orderId, $newInvoiceAddressId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     */
    public function getNewInvoiceAddressId()
    {
    }
}
