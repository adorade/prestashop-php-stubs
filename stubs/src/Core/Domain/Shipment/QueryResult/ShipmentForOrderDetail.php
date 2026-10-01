<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class ShipmentForOrderDetail
{
    public function __construct(private int $shipmentId, private int $quantity)
    {
    }
    public function getShipmentId(): int
    {
    }
    public function getQuantity(): int
    {
    }
    /**
     * @return array{
     *     shipment_id: int,
     *     quantity: int,
     * }
     */
    public function toArray(): array
    {
    }
}
