<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment;

/**
 * Recalculates shipping cost for all active shipments of an order and updates the order totals.
 */
class ShipmentShippingCostUpdater
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository, private readonly \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator\ShippingCostCalculatorInterface $shippingCostCalculator, private readonly \PrestaShop\PrestaShop\Adapter\Shipment\OrderShippingTotalUpdater $orderShippingTotalUpdater)
    {
    }
    public function recalculateForOrder(int $orderId): \Order
    {
    }
}
