<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Query;

/**
 * Lists the products returned within an order return for rendering on the edit form.
 */
class GetOrderReturnProducts
{
    /**
     * @param int $orderReturnId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnConstraintException
     */
    public function __construct(int $orderReturnId)
    {
    }
    public function getOrderReturnId(): \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId
    {
    }
}
