<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

/**
 * Edit shipment
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditShipmentHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\EditShipmentHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator, private \PrestaShop\PrestaShop\Adapter\Shipment\ShipmentShippingCostUpdater $shipmentShippingCostUpdater, private \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\ShipmentNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\CannotSaveShipmentException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\EditShipment $command): void
    {
    }
}
