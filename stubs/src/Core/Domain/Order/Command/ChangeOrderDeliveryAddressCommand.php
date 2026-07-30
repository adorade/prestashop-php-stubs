<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Changes delivery address for given order.
 */
class ChangeOrderDeliveryAddressCommand
{
    /**
     * @param int $orderId
     * @param int $newDeliveryAddressId
     */
    public function __construct($orderId, $newDeliveryAddressId)
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
    public function getNewDeliveryAddressId()
    {
    }
}
