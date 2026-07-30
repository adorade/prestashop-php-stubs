<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command;

/**
 * Updates order returns state.
 */
class UpdateOrderReturnStateCommand
{
    /**
     * @param int $orderReturnId
     * @param int $orderReturnStateId
     *
     * @throws OrderReturnConstraintException
     */
    public function __construct(int $orderReturnId, int $orderReturnStateId)
    {
    }
    /**
     * @return OrderReturnId
     */
    public function getOrderReturnId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId
    {
    }
    /**
     * @return OrderReturnStateId
     */
    public function getOrderReturnStateId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
    {
    }
}
