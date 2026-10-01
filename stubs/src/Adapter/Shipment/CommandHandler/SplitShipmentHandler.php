<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class SplitShipmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\SplitShipmentHandlerInterface
{
    public function __construct(private \PrestaShopBundle\Entity\Repository\ShipmentRepository $repository, private \PrestaShop\PrestaShop\Core\Domain\Shipment\Service\ShipmentSplitterInterface $splitter, private \Symfony\Contracts\Translation\TranslatorInterface $translator, private \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentShippingCostUpdater $shipmentShippingCostUpdater, private \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\SplitShipment $command): void
    {
    }
}
