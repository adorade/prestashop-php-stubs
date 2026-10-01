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
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
     */
    public function __construct(array $orderStateIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId[]
     */
    public function getOrderStateIds(): array
    {
    }
}
