<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Duplicates cart for given order
 */
class DuplicateOrderCartCommand
{
    /**
     * @param int $orderId
     */
    public function __construct($orderId)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId()
    {
    }
}
