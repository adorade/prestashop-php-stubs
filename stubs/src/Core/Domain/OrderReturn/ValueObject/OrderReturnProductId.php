<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject;

/**
 * Identifies one product row within a merchandise return.
 *
 * A product row is uniquely identified by the pair (id_order_detail, id_customization)
 * — the composite primary key of `order_return_detail`. A customization id of `0`
 * means the row is a regular (non-customized) product line.
 */
class OrderReturnProductId
{
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnConstraintException
     */
    public function __construct(int $orderDetailId, int $customizationId = 0)
    {
    }
    public function getOrderDetailId(): int
    {
    }
    public function getCustomizationId(): int
    {
    }
}
