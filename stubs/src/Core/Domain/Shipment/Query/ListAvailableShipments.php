<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Query;

class ListAvailableShipments
{
    public function __construct(int $orderId, array $orderIdDetails)
    {
    }
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    public function getOrderIdDetails(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailsId
    {
    }
}
