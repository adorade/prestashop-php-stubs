<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

class OrderShipmentService
{
    public function __construct(\PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository, \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository)
    {
    }
    /**
     * Returns the carrier used to ship a specific product within a given order.
     */
    public function getCarrierForProduct(int $orderId, int $productId): ?\Carrier
    {
    }
    /**
     * Returns all distinct carriers used to ship an order.
     *
     * @return \Carrier[]
     */
    public function getAllCarriersForOrder(int $orderId): array
    {
    }
    public function orderHasShipment(int $orderId): bool
    {
    }
}
