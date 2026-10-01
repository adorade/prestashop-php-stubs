<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteProductFromShipmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\DeleteProductFromShipmentHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\DeleteProductFromShipment $command): void
    {
    }
}
