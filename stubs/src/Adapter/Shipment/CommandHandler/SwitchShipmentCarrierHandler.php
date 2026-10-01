<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

/**
 * Switch shipment carrier
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class SwitchShipmentCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\SwitchShipmentCarrierHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\ShipmentNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\CannotSaveShipmentException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\SwitchShipmentCarrierCommand $command): void
    {
    }
}
