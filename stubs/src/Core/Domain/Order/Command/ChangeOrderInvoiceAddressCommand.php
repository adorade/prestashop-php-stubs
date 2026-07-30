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
     * @return OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return AddressId
     */
    public function getNewInvoiceAddressId()
    {
    }
}
