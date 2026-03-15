<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Command;

/**
 * Delete given order messages
 */
class BulkDeleteOrderMessageCommand
{
    /**
     * @param int[] $orderMessageIds
     */
    public function __construct(array $orderMessageIds)
    {
    }
    /**
     * @return OrderMessageId[]
     */
    public function getOrderMessageIds(): array
    {
    }
}
