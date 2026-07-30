<?php

namespace PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler;

/**
 * Provides reusable methods for order state command handlers.
 *
 * @internal
 */
abstract class AbstractOrderStateHandler
{
    /**
     * @throws OrderStateNotFoundException
     */
    protected function assertOrderStateWasFound(\PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $orderStateId, \OrderState $orderState)
    {
    }
    /**
     * @throws MissingOrderStateRequiredFieldsException
     */
    protected function assertRequiredFieldsAreNotMissing(\OrderState $orderState)
    {
    }
    /**
     * @param OrderStateId $orderStateId
     *
     * @return OrderState
     *
     * @throws OrderStateException
     * @throws OrderStateNotFoundException
     */
    protected function getOrderState(\PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $orderStateId): \OrderState
    {
    }
    /**
     * Deletes legacy Address
     *
     * @param OrderState $orderState
     *
     * @return bool
     *
     * @throws OrderStateException
     */
    protected function deleteOrderState(\OrderState $orderState): bool
    {
    }
}
