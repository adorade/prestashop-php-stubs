<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Query;

/**
 * Gets order return for editing in Back Office
 */
class GetOrderReturnForEditing
{
    /**
     * @param int $orderReturnId
     *
     * @throws OrderReturnConstraintException
     */
    public function __construct(int $orderReturnId)
    {
    }
    /**
     * @return OrderReturnId
     */
    public function getOrderReturnId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId
    {
    }
}
