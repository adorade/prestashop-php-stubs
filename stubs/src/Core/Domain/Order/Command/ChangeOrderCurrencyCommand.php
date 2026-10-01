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
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    public function getNewCurrencyId()
    {
    }
}
