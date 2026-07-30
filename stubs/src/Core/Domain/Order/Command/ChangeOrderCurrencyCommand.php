<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Changes currency for given order.
 */
class ChangeOrderCurrencyCommand
{
    /**
     * @param int $orderId
     * @param int $newCurrencyId
     */
    public function __construct($orderId, $newCurrencyId)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return CurrencyId
     */
    public function getNewCurrencyId()
    {
    }
}
