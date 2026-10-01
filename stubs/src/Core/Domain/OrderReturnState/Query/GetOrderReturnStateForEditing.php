<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Query;

/**
 * Gets order return state information for editing.
 */
class GetOrderReturnStateForEditing
{
    /**
     * @param int $orderReturnStateId
     */
    public function __construct($orderReturnStateId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
     */
    public function getOrderReturnStateId()
    {
    }
}
