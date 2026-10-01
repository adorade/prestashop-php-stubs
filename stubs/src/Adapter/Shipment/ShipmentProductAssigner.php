<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class ShipmentProductAssigner
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private readonly \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentShippingCostUpdater $shipmentShippingCostUpdater)
    {
    }
    public function assign(?int $shipmentId, \Order $order, \OrderDetail $orderDetail, ?int $carrierId = null): void
    {
    }
}
