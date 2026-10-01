<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\Command;

class MergeProductsToShipment
{
    public function __construct(int $sourceShipmentId, int $targetShipmentId, array $orderDetailQuantities)
    {
    }
    public function getSourceShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
    public function getTargetShipmentId(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\ShipmentId
    {
    }
    public function getOrderDetailQuantity(): \PrestaShop\PrestaShop\Core\Domain\Shipment\ValueObject\OrderDetailQuantity
    {
    }
}
