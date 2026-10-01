<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderShipmentsForViewing
{
    /**
     * @param \PrestaShopBundle\Entity\Shipment[] $shipments
     */
    public function __construct(array $shipments)
    {
    }
    /**
     * @return \PrestaShopBundle\Entity\Shipment[]
     */
    public function getShipments(): array
    {
    }
    public function getTotalCount(): int
    {
    }
    public function getFulfilledCount(): int
    {
    }
    /**
     * Returns true if all shipments have been fulfilled.
     * A fulfilled shipment has both a tracking_number and a packed_at date set.
     */
    public function areAllShipmentsPacked(): bool
    {
    }
}
