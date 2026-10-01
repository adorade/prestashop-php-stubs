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
    /**
     * @param int $orderId
     *
     * @return \PrestaShopBundle\Entity\Shipment[]
     */
    public function getAllShipmentsByOrderId(int $orderId)
    {
    }
    /**
     * @return array<int, array{
     *     id_shipment: int,
     *     quantity: int,
     * }>
     */
    public function findByOrderIdAndOrderDetailId(int $orderId, int $orderDetailId): array
    {
    }
    public function findByOrderAndShipmentId(int $orderId, int $shipmentId): ?\PrestaShopBundle\Entity\Shipment
    {
    }
    public function findById(int $shipmentId): ?\PrestaShopBundle\Entity\Shipment
    {
    }
    /**
     * @param int[] $shipmentIds
     *
     * @return \PrestaShopBundle\Entity\Shipment[]
     */
    public function findByIds(array $shipmentIds): array
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
    public function deleteShipmentProductByOrderAndOrderDetail(int $orderId, int $orderDetailId): void
    {
    }
    public function deleteEmptyShipmentByOrder(int $orderId): void
    {
    }
    public function updateShipmentProductQuantity(int $shipmentId, int $orderDetailId, int $quantity): void
    {
    }
}
