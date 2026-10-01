<?php

namespace PrestaShop\PrestaShop\Adapter\Shipment\CommandHandler;

/**
 * Fulfill shipment by assigning the tracking number and marking it as packed
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class FulfillShipmentCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler\FulfillShipmentCommandHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository, private \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\ShipmentNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shipment\Exception\CannotSaveShipmentException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\FulfillShipmentCommand $command): void
    {
    }
}
