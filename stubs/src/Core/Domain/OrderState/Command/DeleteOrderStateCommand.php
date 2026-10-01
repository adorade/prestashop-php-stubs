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
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
     */
    public function __construct(int $orderStateId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId
     */
    public function getOrderStateId(): \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId
    {
    }
}
