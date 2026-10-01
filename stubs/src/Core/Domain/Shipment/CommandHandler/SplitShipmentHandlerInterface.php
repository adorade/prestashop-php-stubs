<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\CommandHandler;

interface SplitShipmentHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Shipment\Command\SplitShipment $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Shipment\Command\SplitShipment $command): void;
}
