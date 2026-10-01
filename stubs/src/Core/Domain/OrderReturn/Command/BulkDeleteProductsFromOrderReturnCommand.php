<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command;

/**
 * Removes several product rows from a merchandise return atomically, in the same form submit
 * as the rest of the edit page. Backs the deferred-delete UI introduced by Issue #27628.
 */
class BulkDeleteProductsFromOrderReturnCommand
{
    /**
     * @param array<int, array{order_detail_id: int, customization_id?: int}> $stagedProductRows
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnConstraintException
     */
    public function __construct(int $orderReturnId, array $stagedProductRows)
    {
    }
    public function getOrderReturnId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnProductId[]
     */
    public function getProductIds(): array
    {
    }
}
