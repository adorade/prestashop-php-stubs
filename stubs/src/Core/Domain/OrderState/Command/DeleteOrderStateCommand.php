<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Command;

/**
 * Deletes Address
 */
class DeleteOrderStateCommand
{
    /**
     * @param int $orderStateId
     *
     * @throws OrderStateException
     */
    public function __construct(int $orderStateId)
    {
    }
    /**
     * @return OrderStateId
     */
    public function getOrderStateId(): \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId
    {
    }
}
