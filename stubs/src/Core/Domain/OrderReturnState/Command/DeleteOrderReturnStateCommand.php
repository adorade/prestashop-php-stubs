<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command;

/**
 * Deletes Order Return States
 */
class DeleteOrderReturnStateCommand
{
    /**
     * @param int $orderReturnStateId
     */
    public function __construct(int $orderReturnStateId)
    {
    }
    /**
     * @return OrderReturnStateId
     */
    public function getOrderReturnStateId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
    {
    }
}
