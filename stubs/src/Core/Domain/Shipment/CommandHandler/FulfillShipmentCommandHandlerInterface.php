<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

interface FulfillShipmentCommandHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Command\FulfillShipmentCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\FulfillShipmentCommand $command): void;
}
