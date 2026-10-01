<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class ShipmentProductQuantityUpdater
{
    public function __construct(private \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository)
    {
    }
    /**
     * @param array<int, array{
     *     shipment_id: int,
     *     quantity: int
     * }> $shipmentsQuantities
     */
    public function updateShipmentQuantity(int $orderDetailId, array $shipmentsQuantities): void
    {
    }
}
