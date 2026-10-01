<?php

namespace PrestaShopBundle\Entity\Repository;

class ShipmentRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @var string
     */
    public $tablePrefix;
    public function setTablePrefix(string $tablePrefix): void
    {
    }
    /**
     * @param int $orderId
     *
     * @return \PrestaShopBundle\Entity\Shipment[]
     */
    public function findByOrderId(int $orderId)
    {
    }
    public function findByOrderAndShipmentId(int $orderId, int $shipmentId): ?\PrestaShopBundle\Entity\Shipment
    {
    }
    public function findById(int $shipmentId): ?\PrestaShopBundle\Entity\Shipment
    {
    }
    public function findByCarrierId(int $carrierId): array
    {
    }
    public function save(\PrestaShopBundle\Entity\Shipment $shipment): int
    {
    }
    public function delete(\PrestaShopBundle\Entity\Shipment $shipment): void
    {
    }
    /**
     * @return array<int, array{
     *     id_shipment: int,
     *     id_order: int,
     *     id_carrier: int,
     *     id_delivery_address: int,
     *     shipping_cost_tax_excl: string,
     *     shipping_cost_tax_incl: string,
     *     packed_at: string|null,
     *     shipped_at: string|null,
     *     delivered_at: string|null,
     *     cancelled_at: string|null,
     *     tracking_number: string|null,
     *     date_add: string,
     *     date_upd: string,
     *     package_weight: string|null,
     *     carrier_name: string|null
     * }>
     */
    public function getShipmentWithWeightByOrderId(int $orderId): array
    {
    }
}
