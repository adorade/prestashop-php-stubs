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
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId
     */
    public function getOrderStateId()
    {
    }
}
