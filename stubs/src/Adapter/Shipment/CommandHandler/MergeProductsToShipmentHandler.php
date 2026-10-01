<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class MergeProductsToShipmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\MergeProductsToShipmentHandlerInterface
{
    public function __construct(private \PrestaShopBundle\Entity\Repository\ShipmentRepository $repository, private \PrestaShop\PrestaShop\Core\Domain\Shipment\Service\ShipmentMergerInterface $merger, private \Symfony\Contracts\Translation\TranslatorInterface $translator, private \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentShippingCostUpdater $shipmentShippingCostUpdater, private \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\MergeProductsToShipment $command): void
    {
    }
}
