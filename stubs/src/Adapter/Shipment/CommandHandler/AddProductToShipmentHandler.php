<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddProductToShipmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\AddProductToShipmentHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderDetailRepository $orderDetailRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\AddProductToShipment $command): void
    {
    }
}
