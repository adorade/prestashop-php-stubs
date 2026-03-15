<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Command;

/**
 * Deletes addresses in bulk action
 */
class BulkDeleteOrderStateCommand
{
    /**
     * @param int[] $orderStateIds
     *
     * @throws OrderStateException
     */
    public function __construct(array $orderStateIds)
    {
    }
    /**
     * @return OrderStateId[]
     */
    public function getOrderStateIds(): array
    {
    }
}
