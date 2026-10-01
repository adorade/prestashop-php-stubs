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
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
     */
    public function getOrderReturnStateId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
    {
    }
}
