<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command;

/**
 * Removes a single product row from a merchandise return.
 *
 * Handler enforces the legacy parity rule: the last remaining product line cannot be deleted.
 */
class DeleteProductFromOrderReturnCommand
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnConstraintException
     */
    public function __construct(int $orderReturnId, int $orderDetailId, int $customizationId = 0)
    {
    }
    public function getOrderReturnId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnProductId
    {
    }
}
