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
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     */
    public function getNewDeliveryAddressId()
    {
    }
}
