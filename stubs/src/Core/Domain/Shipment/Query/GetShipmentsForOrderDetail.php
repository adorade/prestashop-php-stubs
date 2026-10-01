<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

class GetShipmentsForOrderDetail
{
    public function __construct(int $orderId, int $orderDetailId)
    {
    }
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    public function getOrderDetailId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailId
    {
    }
}
