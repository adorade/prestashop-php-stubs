<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Removes cart rule from given order.
 */
class DeleteCartRuleFromOrderCommand
{
    /**
     * @param int $orderId
     * @param int $orderCartRuleId
     */
    public function __construct($orderId, $orderCartRuleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return int
     */
    public function getOrderCartRuleId()
    {
    }
}
