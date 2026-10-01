<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command;

/**
 * Removes several merchandise returns at once from the grid bulk action.
 */
class BulkDeleteOrderReturnsCommand
{
    /**
     * @param int[] $orderReturnIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnConstraintException
     */
    public function __construct(array $orderReturnIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId[]
     */
    public function getOrderReturnIds(): array
    {
    }
}
