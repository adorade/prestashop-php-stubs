<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class CreateShipmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\CreateShipmentHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository, private readonly \PrestaShop\PrestaShop\Core\Domain\Carrier\ShippingCost\Calculator\ShippingCostCalculatorInterface $shippingCostCalculator, private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration, private readonly \PrestaShop\PrestaShop\Adapter\Shipment\OrderShippingTotalUpdater $orderShippingTotalUpdater)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\CreateShipment $command): int
    {
    }
}
