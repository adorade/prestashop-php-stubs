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
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnConstraintException
     */
    public function __construct(int $orderReturnId, int $orderReturnStateId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId
     */
    public function getOrderReturnId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
     */
    public function getOrderReturnStateId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
    {
    }
}
