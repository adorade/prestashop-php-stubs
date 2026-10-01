<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Query;

class GetOrderPreview
{
    /**
     * @param int $orderId
     */
    public function __construct(int $orderId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
}
