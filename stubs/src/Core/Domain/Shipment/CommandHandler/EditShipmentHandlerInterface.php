<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

interface EditShipmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Command\EditShipment $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\EditShipment $command): void;
}
