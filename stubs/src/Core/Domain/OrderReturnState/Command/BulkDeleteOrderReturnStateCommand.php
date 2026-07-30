<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command;

/**
 * Deletes order return statuses in bulk action
 */
class BulkDeleteOrderReturnStateCommand
{
    /**
     * @param int[] $orderReturnStateIds
     */
    public function __construct(array $orderReturnStateIds)
    {
    }
    /**
     * @return OrderReturnStateId[]
     */
    public function getOrderReturnStateIds(): array
    {
    }
}
