<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Changes status for given orders.
 */
class BulkChangeOrderStatusCommand
{
    /**
     * @param int[] $orderIds
     * @param int $newOrderStatusId
     */
    public function __construct(array $orderIds, $newOrderStatusId)
    {
    }
    /**
     * @return OrderId[]
     */
    public function getOrderIds()
    {
    }
    /**
     * @return int
     */
    public function getNewOrderStatusId()
    {
    }
}
