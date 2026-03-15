<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler;

/**
 * Provides reusable methods for order return state command handlers.
 *
 * @internal
 */
abstract class AbstractOrderReturnStateHandler
{
    /**
     * @throws OrderReturnStateNotFoundException
     */
    protected function assertOrderReturnStateWasFound(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId, \OrderReturnState $orderReturnState)
    {
    }
    /**
     * @throws MissingOrderReturnStateRequiredFieldsException
     */
    protected function assertRequiredFieldsAreNotMissing(\OrderReturnState $orderReturnState)
    {
    }
    /**
     * @param OrderReturnStateId $orderReturnStateId
     *
     * @return OrderReturnState
     *
     * @throws OrderReturnStateException
     * @throws OrderReturnStateNotFoundException
     */
    protected function getOrderReturnState(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId): \OrderReturnState
    {
    }
    /**
     * Deletes legacy Address
     *
     * @param OrderReturnState $orderReturnState
     *
     * @return bool
     *
     * @throws OrderReturnStateException
     */
    protected function deleteOrderReturnState(\OrderReturnState $orderReturnState): bool
    {
    }
}
