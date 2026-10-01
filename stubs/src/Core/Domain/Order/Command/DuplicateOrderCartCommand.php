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
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId()
    {
    }
}
