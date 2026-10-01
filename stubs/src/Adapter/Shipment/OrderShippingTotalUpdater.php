<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

/**
 * Consolidates the logic for updating order shipping totals based on its shipments.
 */
class OrderShippingTotalUpdater
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository)
    {
    }
    public function update(\Order $order): \Order
    {
    }
}
