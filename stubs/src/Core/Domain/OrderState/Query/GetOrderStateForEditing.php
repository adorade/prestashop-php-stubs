<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Query;

/**
 * Gets order state information for editing.
 */
class GetOrderStateForEditing
{
    /**
     * @param int $orderStateId
     */
    public function __construct($orderStateId)
    {
    }
    /**
     * @return OrderStateId
     */
    public function getOrderStateId()
    {
    }
}
