<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Invoice\Command;

/**
 * Generates invoice for given order.
 */
class GenerateInvoiceCommand
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
