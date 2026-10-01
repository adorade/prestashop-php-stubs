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
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateNotFoundException
     */
    protected function assertOrderReturnStateWasFound(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId, \OrderReturnState $orderReturnState)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\MissingOrderReturnStateRequiredFieldsException
     */
    protected function assertRequiredFieldsAreNotMissing(\OrderReturnState $orderReturnState)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId
     *
     * @return \OrderReturnState
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateException
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateNotFoundException
     */
    protected function getOrderReturnState(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderReturnStateId): \OrderReturnState
    {
    }
    /**
     * Deletes legacy Address
     *
     * @param \OrderReturnState $orderReturnState
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateException
     */
    protected function deleteOrderReturnState(\OrderReturnState $orderReturnState): bool
    {
    }
}
