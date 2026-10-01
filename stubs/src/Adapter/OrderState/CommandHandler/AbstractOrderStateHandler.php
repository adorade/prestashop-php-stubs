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
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateNotFoundException
     */
    protected function assertOrderStateWasFound(\PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $orderStateId, \OrderState $orderState)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\MissingOrderStateRequiredFieldsException
     */
    protected function assertRequiredFieldsAreNotMissing(\OrderState $orderState)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $orderStateId
     *
     * @return \OrderState
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateNotFoundException
     */
    protected function getOrderState(\PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $orderStateId): \OrderState
    {
    }
    /**
     * Deletes legacy Address
     *
     * @param \OrderState $orderState
     *
     * @return bool
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
     */
    protected function deleteOrderState(\OrderState $orderState): bool
    {
    }
}
